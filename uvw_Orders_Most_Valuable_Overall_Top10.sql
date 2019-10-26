USE [Northwind]
GO

/****** Object:  View [dbo].[uvw_Orders_Most_Valuable_Overall_Top10]    Script Date: 26/10/2019 08:56:22 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

Create view [dbo].[uvw_Orders_Most_Valuable_Overall_Top10]
as

select top 10
	OrderID
	,sum(UnitPrice*Quantity) as [Order Amount] 
	
from [Order Details]
group by OrderID
order by 
	sum(UnitPrice*Quantity) desc

GO


