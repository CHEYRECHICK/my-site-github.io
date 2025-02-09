<?php
mysql_connect("localhost","root","14032008") or die (mysql_error());
mysql_select_db("bd_foralltime") or die(mysql_error());

mysql_query("create table users (
    id_user int(10) AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    email varchar(50) NOT NULL,
    PRIMARY KEY (id_user)
    
)");
mysql_close();
?>