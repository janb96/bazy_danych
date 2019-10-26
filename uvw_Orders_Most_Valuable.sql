select * from Orders


-- User View to see most valuable orders (overall)

select 
	OrderID
	,sum(UnitPrice*Quantity) as [Order Amount] 
	
from [Order Details]
group by OrderID
order by 
	OrderID, sum(UnitPrice*Quantity) desc