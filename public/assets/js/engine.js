var token;
var isDateField = [];
var CHART_TYPE_TEXT = 'Text';
var CHART_TYPE_GAUGE = 'Gauge';
var CHART_TYPE_BAR = 'Bar';
var CHART_TYPE_COLUMN = 'Column';

var engine = {
    id: '',
    pageSettings: {
        url: Settings.WebApiUrl + '/api/KendoEngines',
    },

    onload: function () {
        if (!token) {
            if (Settings.Token && Settings.Token.access_token) {
                token = Settings.Token.access_token;
            }
        }
        Util.displayLoading(document.body, true);
        setTimeout(function () {
            var params = Util.parse_query_string(window.location.search.substring(1));
            if (params && params.engine) {
                engine.id = params.engine;
                engine.retrieveEngine();
            }
        }, 100);
    },

    retrieveEngine: function () {
        $.ajax({
            type: 'GET',
            url: Settings.WebApiUrl + '/api/KendoEngines/' + engine.id,
            dataType: 'json',
            //data: Settings.ClientData,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Authorization', 'bearer ' + token);
            },
            success: engine.displayChannelData
        });
    },

    displayChannelData: function (result) {
        // Header Section
        if (result) {
            var engineId;
            var heading = '';

            if (result.vessel && result.vessel.vesselName) heading = result.vessel.vesselName + ' - ';
            if (result.serialNo) heading += result.serialNo;
            if (result.model && result.model.name) heading += ' (' + result.model.name + ')';
            else heading += ' ( Nil )';
            $('#engine_no').text(heading);

            // ChannelData
            if (result.id) engineId = result.id;
            engine.loadMonitoringGrid(engineId);
            engine.loadText(engineId);
            engine.loadGauges(engineId);
            engine.loadBarsAndColumns(engineId);
        }
    },

    preprocessData: function (data) {
        // iterate over all the data elements replacing the Date with a version
        // that Kendo can work with.
        $.each(data.data, function (index, item) {
            item.timeStamp = kendo.parseDate(item.timeStamp);
        });
        return data;
    },

    loadMonitoringGrid: function (engineId) {
        var gridId = '#table_Monitoring';
        var pageNumber = 1;
        var url = Settings.WebApiUrl + '/api/KendoMonitorings';

        // data source settings
        var dataSource = new kendo.data.DataSource({
            transport: {
                read: {
                    // the remote service url
                    url: url,

                    // the request type
                    type: "get",

                    // the data type of the returned result
                    dataType: "json",

                    // Renew Token
                    //data: Settings.ClientData,

                    // passing token
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('Authorization', 'bearer ' + token);
                    },
                },
                parameterMap: function (data, type) {
                    if (type === "read") {
                        // send take as "$top" and skip as "$skip"
                        return {
                            aggregate: data.aggregate,
                            group: data.group,
                            filter: data.filter,
                            models: data.models,
                            page: data.page,
                            pageSize: data.pageSize,
                            take: data.take,
                            skip: data.skip,
                            sort: data.sort
                        };
                    }
                }
            },
            schema: {
                //parse: function (data) {
                //    return engine.preprocessData(data);
                //},
                // describe the result format
                model: {
                    id: "id",
                    fields: {
                        $type: {},
                        channelName: {},
                        channelNo: {},
                        chartType: {},
                        displayUnit: {},
                        engineID: {},
                        engineModelID: {},
                        id: {},
                        imoNo: {},
                        incomingChannelName: {},
                        modelName: {},
                        processed: {},
                        serialNo: {},
                        timeStamp: { type: "date", format: "dd/MM/yyyy" },
                        value: {},
                        vesselName: {}
                    }
                },
                data: "data", // records are returned in the "data" field of the response
                total: "total" // total number of records is in the "total" field of the response
            },
            pageSize: 10,
            serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
            sort: [
                { field: "timeStamp", dir: "desc" }
            ],
            filter: { field: "EngineID", operator: "eq", value: engineId }
        });

        // column settings

        var columns = [
            {
                field: "id",
                title: "ID",
                hidden: true
            },
            {
                field: "timeStamp",
                title: "Time Stamp",
                width: 150,
                type: "date",
                filterable: {
                    ui: function (element) {
                        element.kendoDatePicker({
                            format: "dd/MM/yyyy"
                        });
                    },
                    extra: false,
                    operators: {
                        date: {
                            eq: "Equal",
                            gte: "After or equal to",
                            lte: "Before or equal to"
                        }
                    }
                },
                template: '#= kendo.toString(kendo.parseDate(timeStamp), "dd/MM/yyyy HH:mm")#'
            },
            {
                field: "channelNo",
                title: "Channel No.",
                filterable: {
                    extra: false
                },
                width: 150
            },
            {
                field: "channelName",
                title: "Channel Name",
                filterable: {
                    extra: false
                },
                width: 200
            },
            {
                field: "value",
                title: "Value",
                type: "date",
                filterable: {
                    extra: false
                },
                width: 100
            },
            {
                field: "displayUnit",
                title: "Unit",
                filterable: false,
                width: 100
            }
        ];

        kendo.ui.FilterMenu.fn.options.operators.string = {
            contains: "Contains",
            doesnotcontain: "Does not contains",
            eq: "Equal to",
            neq: "Not equal to",
            startswith: "Starts with",
            endswith: "Ends with"
        };

        // initialize grid
        $(gridId).kendoGrid({
            dataSource: dataSource,
            columns: columns,
            sortable: true,
            scrollable: true,
            resizable: true,
            pageable: true,
            filterable: true,
            selectable: "row",
        });

        // assgining grid to global variable
        var grid = $(gridId).data("kendoGrid");

        grid.bind("filter", function (e) {
            var found = false;

            if (e.filter === null) {
                console.log("filter has been cleared");
            } else {

                for (var i = 0; i < e.filter.filters.length; i++) {
                    var field = e.filter.filters[i].field;
                    var value = e.filter.filters[i].value;

                    if (field.toLowerCase() === "EngineID") found = true;
                }

                if (!found) {
                    var engineFilter = { field: "EngineID", operator: "eq", value: engineId };
                    e.filter.filters.push(engineFilter);
                }
            }
        });

    },

    loadText: function (engineId) {
        var data = Settings.ClientData;
        data.id = engineId;
        data.chartType = CHART_TYPE_TEXT;

        $.ajax({
            type: 'GET',
            url: Settings.WebApiUrl + 'api/KendoMonitorings/DashboardViews',
            dataType: 'json',
            data: data,
            //async: false,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Authorization', 'bearer ' + Settings.Token.access_token);
            },
            success: function (result) {
                var panelRoot = $('#texts');
                $.each(result, function (index) {
                    var txtObj = result[index];
                    var c = txtObj.channelSetup;
                    var v = txtObj.monitoringLastValue;
                    var d = new Date(v.timeStamp);
                    var dt = Util.formatDate(d, "dd/MM/yyyy hh:mm:ss TT", true);

                    var divTemplate =
                        '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">{{channelName}}</div>' +
                        '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">{{channelValue}}</div>' +
                        '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">{{channelDate}}</div>' +
                        '';
                    divTemplate = divTemplate.replace(/{{channelNo}}/g, c.channelNo);
                    divTemplate = divTemplate.replace(/{{channelName}}/g, c.channelNo + ' (' + c.name + ')');
                    divTemplate = divTemplate.replace(/{{channelValue}}/g, '<strong>' + v.value + '</strong> ' + c.displayUnit);
                    divTemplate = divTemplate.replace(/{{channelDate}}/g, dt.toString());
                    $(divTemplate).appendTo(panelRoot);
                });
            }
        });
    },

    loadGauges: function (engineId) {
        var data = Settings.ClientData;
        data.id = engineId;
        data.chartType = CHART_TYPE_GAUGE;

        $.ajax({
            type: 'GET',
            url: Settings.WebApiUrl + 'api/KendoMonitorings/DashboardViews',
            dataType: 'json',
            data: data,
            //async: false,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Authorization', 'bearer ' + Settings.Token.access_token);
            },
            success: engine.showGaugeDashboard
        });
    },

    showGaugeDashboard: function (result, textStatus, jqXHR) {
        var panelRoot = $('#gauges'); // accordion root element

        var divTemplate =
            '<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">' +
            '    <div class="panel panel-default">' +
            '        <div class="panel-body">' +
            '            <div style="text-align: center;">' +
            '                <div id="channel_{{channelNo}}_Time" class="gauge"></div>' +
            '                <div id="channel_{{channelNo}}" class="gauge" style="display:inline-block;"></div>' +
            '            </div>' +
            '        </div>' +
            '        <div class="panel-footer" style="text-align: center; height:70px; !important">' +
            '            <span>{{channelName}}</span>' +
            //'            <span class="pull-right"></span>' + //<i class="fa fa-arrow-circle-right"></i> //Arrow on right align
            '            <div class="clearfix"></div>' +
            '        </div>' +
            '    </div>' +
            '</div>';

        $.each(result, function (index) {
            var gaugeObj = result[index];

            var divHtml = divTemplate;

            var c = gaugeObj.channelSetup;
            var v = gaugeObj.monitoringLastValue;

            if (c) {
                divHtml = divHtml.replace(/{{channelNo}}/g, c.channelNo);
                divHtml = divHtml.replace(/{{channelName}}/g, c.channelNo + ' (' + c.name + ' - ' + c.displayUnit + ')');

                $(divHtml).appendTo(panelRoot);

                if (v) {
                    var d = new Date(v.timeStamp);
                    if (d) $("#channel_" + c.channelNo + "_Time").append("<span>" + d.toLocaleDateString() + " " + d.toLocaleTimeString() + "</span>")

                    // Digital Data Type
                    if (c.dataTypeNo === 1) {
                        $("#channel_" + c.channelNo).css({ width: "300px", height: "200px" }).kendoChart({
                            title: {
                                position: "bottom",
                                //text: (v.value && !isNaN(v.value) ? Math.trunc(v.value).toString() + " " : "") + "(" + c.displayUnit + ")"
                            },
                            legend: {
                                visible: false
                            },
                            series: [{
                                type: "pie",
                                data: [{
                                    value: "100",
                                    color: (v.value === c.alarmValue ? "#dd0606" : "#068c35") // alarm = red, normal = green 
                                }]
                            }]
                        });
                    }
                    else if (c.dataTypeNo === 2) {
                        // Draw pie chart
                        $("#channel_" + c.channelNo).css({ width: "300px", height: "200px" }).kendoRadialGauge({
                            pointer: {
                                value: v.value
                            },
                            scale: {
                                minorUnit: c.scale,
                                startAngle: -30,
                                endAngle: 210,
                                max: c.maxRange,
                                ranges: [
                                    {
                                        from: c.upperLimit,
                                        to: c.maxRange,
                                        color: "#c20000"
                                    }
                                ]
                            }
                        });// end of gauge drawing
                    }
                    //else if (c.dataTypeNo === 3) {
                    //    // Draw gauge
                    //    $("#channel_" + c.channelNo).css({ width: "300px", height: "200px" }).html('<br/>' + v.value + ' ' + c.displayUnit);
                    //}
                }// end of last value
            } // check channel
        });// end of for each

        Util.displayLoading(document.body, false);
    },

    loadBarsAndColumns: function (engineId) {
        for (var i = 0; i < 2; i++) {
            var data = Settings.ClientData;
            data.id = engineId;
            if (i === 0) data.chartType = CHART_TYPE_BAR;
            else if (i === 1) data.chartType = CHART_TYPE_COLUMN;

            $.ajax({
                type: 'GET',
                url: Settings.WebApiUrl + 'api/KendoMonitorings/DashboardViews',
                dataType: 'json',
                data: data,
                async: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization', 'bearer ' + Settings.Token.access_token);
                },
                success: function (result) {
                    engine.showBarColumnDashboard(result, data.chartType);
                }
            });
        }
    },

    showBarColumnDashboard: function (result, chartType) {
        var groupNames = engine.getGroupNames(result);

        $.each(groupNames, function (index) {
            var gn = groupNames[index];

            var dataArray = [];
            var catNameArray = [];
            var catChannelNoArray = [];
            var unit = [];

            $.each(result, function (index) {
                var obj = result[index];

                var c = obj.channelSetup;
                var v = obj.monitoringLastValue;

                if (c.channelGroupName === gn) {
                    dataArray.push(v.value);
                    if ($.inArray(c.name, catNameArray) < 0) {
                        catNameArray.push(c.name);
                        catChannelNoArray.push(c.channelNo);
                        unit.push(c.displayUnit);
                    }
                }
            });// end of grouping

            var barColGroup = {};
            barColGroup.groupName = gn===null ? '_' : gn.replace(/ /g, '_');
            if (dataArray) barColGroup.data = dataArray;
            if (catNameArray) barColGroup.names = catNameArray;
            if (catChannelNoArray) barColGroup.channelNos = catChannelNoArray;

            var divTemplate =
                '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
                '    <div class="panel panel-default">' +
                '        <div class="panel-body">' +
                '            <div style="text-align: center;">' +
                //'                <div id="bar_{{groupName}}" class="gauge"></div>' +
                '                <div id="' + chartType + '_{{groupName}}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:inline-block;"></div>' +
                '            </div>' +
                '        </div>' +
                '        <div class="panel-footer" style="text-align: center;">' +
                '            <span>{{footerGroupName}}</span>' +
                //'            <span class="pull-right"></span>' + //<i class="fa fa-arrow-circle-right"></i> //Arrow on right align
                '            <div class="clearfix"></div>' +
                '        </div>' +
                '    </div>' +
                '</div>';

            var panelRoot = $('#' + chartType.toLowerCase());
            var divHtml = divTemplate;
            var nameAndUnit = barColGroup.groupName.replace(/_/g, "&nbsp;") + (unit && unit[0]? ' (' + unit[0] + ')' : '');

            divHtml = divHtml.replace(/{{groupName}}/g, barColGroup.groupName);
            divHtml = divHtml.replace(/{{footerGroupName}}/g, nameAndUnit);

            $(divHtml).appendTo(panelRoot);

            $("#" + chartType + "_" + barColGroup.groupName).kendoChart({
                legend: {
                    visible: false
                },
                seriesDefaults: {
                    type: chartType.toLowerCase()
                },
                series: [{
                    name: "Values",
                    data: barColGroup.data,
                    color: function (point) {
                        switch (chartType.toLowerCase()) {
                            case "bar":
                                return "#1E8449";
                            case "column":
                                return "#3498DB";
                            default:
                        }
                    }
                }],
                valueAxis: {
                    line: {
                        visible: false
                    },
                    labels: {
                        rotation: "auto"
                    }
                },
                categoryAxis: {
                    //categories: barColGroup.channelNos,
                    categories: barColGroup.names,
                    majorGridLines: {
                        visible: false
                    },
                    labels: {
                        template: "#= engine.shortLabels(value)#"
                    }
                },
                tooltip: {
                    visible: true,
                    template: "#= series.name #: #= value #"
                }
            });

            $(window).resize(function () {
                $("#" + chartType + "_" + barColGroup.groupName).data("kendoChart").refresh();
            });
        });// loop each group
    },

    shortLabels: function (value) {
        //if (value.length > 30) {
        //    value = value.substring(0, 30);
        //    return value + "...";
        //}

        var label = [];
        while (value.length > 0) {
            var tmp = "";
            if (value.length > 20) { 
                tmp = value.substring(0, 20);
                var index = tmp.lastIndexOf(" ");
                if (index > 0) tmp = tmp.substring(0, index);
            }
            else
                tmp = value;

            label.push(tmp);
            value = value.replace(tmp, "");
        }
        if (label.length > 0) return label.join("\n");
        else return value;
    },

    getGroupNames: function (array) {
        var groupNames = [];
        $.each(array, function (index) {
            var c = array[index].channelSetup;
            var found = $.inArray(c.channelGroupName, groupNames);
            if (found<0) groupNames.push(c.channelGroupName);
        });

        return groupNames;
    }
}