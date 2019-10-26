USE [Northwind]
GO

/****** Object:  View [dbo].[uvw_EmployeeExperienceDetails]    Script Date: 26/10/2019 13:33:55 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

create view [dbo].[uvw_EmployeeExperienceDetails]
as
select 
	FirstName+' '+LastName as [Name]
	,datediff(year, BirthDate, getdate()) as [AgeNow (years)]
	,datediff(year, BirthDate, HireDate) as [AgeHired (years)]
	,datediff(year, HireDate, getdate()) as [Experience (years)]
	
from Employees
--order by datediff(year, BirthDate, getdate()) 
GO


