select 
	m.Id 'Id'
    , m.IMO_No 'IMONo'
    , m.TimeStamp 'TimeStamp'
    , date(m.TimeStamp) 'TimeStampDateOnly'
    , v.VesselName 'VesselName'
    , m.SerialNo 'SerialNo'
	, e.Id 'EngineID'
    , e.EngineModelID 'EngineModelID'
    , ml.Name 'ModelName'
    , m.ChannelNo 'ChannelNo'
    , m.Value 'Value'
    , c.DisplayUnit 'DisplayUnit'
    , m.ChannelDescription 'IncomingChannelName'
    , c.Name 'ChannelName'
    , ct.Name 'ChartType'
    , ifnull(c.DashboardDisplay,0) 'DashboardDisplay'
    , cg.Name 'ChannelGroup'
from Monitoring m
	left outer join Vessel v on m.IMO_No = v.IMO_No
    left outer join Engine e on m.SerialNo = e.SerialNo
    left outer join Model ml on e.EngineModelID = ml.Id
    left outer join Channel c on m.ChannelNo = c.ChannelNo and e.EngineModelID = c.ModelID
    left outer join ChannelGroups cg on c.ChannelGroupID = cg.Id
    left outer join ChartTypes ct on c.ChartTypeId = ct.Id
order by timestamp desc