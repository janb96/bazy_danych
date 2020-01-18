## Repozytorium stworzone na potrzeby zajęć z przedmiotu Bazy Danych

### Członkowie grupy:
#### - Jan Boduch
#### - Mariusz Rogucki
#### - Sebastian Dąbek

### Wykorzystane technologie:

#### - Docker
#### - Docker Compose
#### - MySQL
#### - PHP7
#### - Wrapper 
#### - orphans/mysql-wrapper

### Uruchomienie programu:

#### Opcja nr 1:
##### Uruchomienie za pomocą skryptu „start.sh” (./start.sh, w razie potrzeby chmod + x start.sh)

#### Opcja nr 2:
##### Wykonanie poleceń:
###### `docker build -t my_php -f website/Dockerfile website`
###### `docker-compose up`


### Opis wykorzystanych technologii:

#### Docker Compose to narzędzie do uruchamiania wielokontenerowych aplikacji. Kontenery, które zostaną uruchomione są zdefiniowane w pliku docker-compose.yml

#### orphans/mysql-wrapper: „A database wrapper class to help reduce code and support rapid development”

### Jak skonfigurować?

#### 1.) Stworzyć plik connect.php
```
<?php

require_once('wrapper/mysql_wrapper.class.php');

$db = new MYSQL_WRAPPER();

$db->connect(array(
	'host' => 'db',
	'port' => '3306',
	'username' => 'user1',
	'password' => '123',
	'database' => 'test_db'
));
```
#### 2.) Wczytać plik connect.php w module, w którym planujemy go użyć
```
include(„connect.php");
```
#### 3.)Wykonać zapytanie
```
INSERT

$db->insert('users', [
	'name' => 'John Smith',
	'email' => 'john.smith@somedomain.com',
	'last_updated' => 'NOW()',
]);

UPDATE

$db->update("employees", $_POST, "`EmployeeID`=:employeeID", ['employeeID' => $employeeID]);

DELETE

$delete = $db->delete("employees", "`EmployeeID`=:employeeID", 
	[ 
		'employeeID' => $employeeID
	]
);

SELECT

$db->select("SELECT * FROM `orders`");
```
