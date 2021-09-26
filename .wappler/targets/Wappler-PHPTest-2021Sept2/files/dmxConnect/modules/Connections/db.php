<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$exports = <<<'JSON'
{
    "name": "db",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "mysql",
        "databaseType": "MySQL",
        "connectionString": "mysql:host=db;sslverify=false;port=3306;dbname=Wappler-PHPTest-2021Sept2;user=db_user;password=YflG3FTO;charset=utf8"
    }
}
JSON;
?>