USE [Northwind]
GO

/****** Object:  View [dbo].[uvw_Order_Resolution_SLA]    Script Date: 26/10/2019 08:56:18 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE VIEW [dbo].[uvw_Order_Resolution_SLA]
as
select 
	OrderID
	,OrderDate
	,RequiredDate
	,ShippedDate
	,DATEDIFF(DAY, OrderDate, RequiredDate) as [Resolution Days to Required] 
	,DATEDIFF(DAY, OrderDate, ShippedDate) as [Resolution Days to Shipped]
	--,IIF(DATEDIFF(DAY, OrderDate, RequiredDate)-DATEDIFF(DAY, OrderDate, ShippedDate)>1) THEN 'cos' ELSE 'cos innego' END
	,IIF(DATEDIFF(DAY, OrderDate, RequiredDate)>DATEDIFF(DAY, OrderDate, ShippedDate), 'In time', 'Late')
	
	from Orders o
	--A lot of NULLs in Shipped Date in Orders
	where ShippedDate is not null

GO


