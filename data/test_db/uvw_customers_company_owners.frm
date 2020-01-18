TYPE=VIEW
query=select `test_db`.`customers`.`CustomerID` AS `CustomerID`,`test_db`.`customers`.`CompanyName` AS `CompanyName`,`test_db`.`customers`.`ContactName` AS `ContactName`,`test_db`.`customers`.`ContactTitle` AS `ContactTitle`,`test_db`.`customers`.`Address` AS `Address`,`test_db`.`customers`.`City` AS `City`,`test_db`.`customers`.`Region` AS `Region`,`test_db`.`customers`.`PostalCode` AS `PostalCode`,`test_db`.`customers`.`Country` AS `Country`,`test_db`.`customers`.`Phone` AS `Phone`,`test_db`.`customers`.`Fax` AS `Fax` from `test_db`.`customers` where (`test_db`.`customers`.`ContactTitle` = \'Owner\')
md5=a22391e580bb1ee0e998459aeb0a7fb1
updatable=1
algorithm=0
definer_user=root
definer_host=%
suid=1
with_check_option=0
timestamp=2020-01-18 11:24:50
create-version=1
source=SELECT\n        `customers`.`CustomerID` AS `CustomerID`,\n        `customers`.`CompanyName` AS `CompanyName`,\n        `customers`.`ContactName` AS `ContactName`,\n        `customers`.`ContactTitle` AS `ContactTitle`,\n        `customers`.`Address` AS `Address`,\n        `customers`.`City` AS `City`,\n        `customers`.`Region` AS `Region`,\n        `customers`.`PostalCode` AS `PostalCode`,\n        `customers`.`Country` AS `Country`,\n        `customers`.`Phone` AS `Phone`,\n        `customers`.`Fax` AS `Fax`\n    FROM\n        `customers`\n    WHERE\n        (`customers`.`ContactTitle` = \'Owner\')
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `test_db`.`customers`.`CustomerID` AS `CustomerID`,`test_db`.`customers`.`CompanyName` AS `CompanyName`,`test_db`.`customers`.`ContactName` AS `ContactName`,`test_db`.`customers`.`ContactTitle` AS `ContactTitle`,`test_db`.`customers`.`Address` AS `Address`,`test_db`.`customers`.`City` AS `City`,`test_db`.`customers`.`Region` AS `Region`,`test_db`.`customers`.`PostalCode` AS `PostalCode`,`test_db`.`customers`.`Country` AS `Country`,`test_db`.`customers`.`Phone` AS `Phone`,`test_db`.`customers`.`Fax` AS `Fax` from `test_db`.`customers` where (`test_db`.`customers`.`ContactTitle` = \'Owner\')
