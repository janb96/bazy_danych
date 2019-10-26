USE [Northwind]
GO

/****** Object:  View [dbo].[uvw_TOP20_selling_products]    Script Date: 26/10/2019 13:16:03 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE VIEW [dbo].[uvw_TOP20_selling_products]
as
select top 20
	od.ProductID
	,p.ProductName
	,count(od.ProductID) as [Ordered Number]
	--OrderID
	--,ProductID
	,sum(od.[UnitPrice]*od.[Quantity]) as [Order Amount] 
	
from [Order Details] od
left join Products p on od.ProductID = p.ProductID
group by od.[ProductID], p.ProductName
order by sum(od.[UnitPrice]*od.[Quantity]) desc

GO


