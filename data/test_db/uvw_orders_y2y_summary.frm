TYPE=VIEW
query=select year(`o`.`OrderDate`) AS `year(o.OrderDate)`,sum((`p`.`UnitPrice` * `od`.`Quantity`)) AS `OrderAmount` from ((`test_db`.`order_details` `od` left join `test_db`.`products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) left join `test_db`.`orders` `o` on((`od`.`OrderID` = `o`.`OrderID`))) group by year(`o`.`OrderDate`)
md5=504b3ba01ffef83ffa6e1271b931c153
updatable=0
algorithm=0
definer_user=root
definer_host=%
suid=1
with_check_option=0
timestamp=2020-01-18 11:27:17
create-version=1
source=select year(`o`.`OrderDate`) AS `year(o.OrderDate)`,sum((`p`.`UnitPrice` * `od`.`Quantity`)) AS `OrderAmount` from ((`order_details` `od` left join `products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) left join `orders` `o` on((`od`.`OrderID` = `o`.`OrderID`))) group by year(`o`.`OrderDate`)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select year(`o`.`OrderDate`) AS `year(o.OrderDate)`,sum((`p`.`UnitPrice` * `od`.`Quantity`)) AS `OrderAmount` from ((`test_db`.`order_details` `od` left join `test_db`.`products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) left join `test_db`.`orders` `o` on((`od`.`OrderID` = `o`.`OrderID`))) group by year(`o`.`OrderDate`)
