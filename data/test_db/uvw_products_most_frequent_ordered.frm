TYPE=VIEW
query=select `p`.`ProductName` AS `ProductName`,count(`od`.`OrderID`) AS `count(od.OrderID)` from (`test_db`.`order_details` `od` left join `test_db`.`products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) group by `p`.`ProductName` order by count(`od`.`OrderID`) desc
md5=93361926be6fd56e692fc3b88763e37b
updatable=0
algorithm=0
definer_user=root
definer_host=%
suid=1
with_check_option=0
timestamp=2020-01-18 11:28:11
create-version=1
source=select `p`.`ProductName` AS `ProductName`,count(`od`.`OrderID`) AS `count(od.OrderID)` from (`order_details` `od` left join `products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) group by `p`.`ProductName` order by count(`od`.`OrderID`) desc
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `p`.`ProductName` AS `ProductName`,count(`od`.`OrderID`) AS `count(od.OrderID)` from (`test_db`.`order_details` `od` left join `test_db`.`products` `p` on((`od`.`ProductID` = `p`.`ProductID`))) group by `p`.`ProductName` order by count(`od`.`OrderID`) desc
