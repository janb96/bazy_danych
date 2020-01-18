TYPE=VIEW
query=select `od`.`OrderID` AS `OrderID`,sum((`p`.`UnitPrice` * `od`.`Quantity`)) AS `OrderAmount` from (`test_db`.`order_details` `od` left join `test_db`.`products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) group by `od`.`OrderID` order by `OrderAmount` desc limit 10
md5=d071c321bd15eec68d769fe97711e3c0
updatable=0
algorithm=0
definer_user=root
definer_host=%
suid=1
with_check_option=0
timestamp=2020-01-18 11:26:49
create-version=1
source=select `od`.`OrderID` AS `OrderID`,sum((`p`.`UnitPrice` * `od`.`Quantity`)) AS `OrderAmount` from (`order_details` `od` left join `products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) group by `od`.`OrderID` order by `OrderAmount` desc limit 10
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `od`.`OrderID` AS `OrderID`,sum((`p`.`UnitPrice` * `od`.`Quantity`)) AS `OrderAmount` from (`test_db`.`order_details` `od` left join `test_db`.`products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) group by `od`.`OrderID` order by `OrderAmount` desc limit 10
