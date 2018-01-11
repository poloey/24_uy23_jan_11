<?php
$con = mysqli_connect('localhost', 'root', '', 'fgc');

$con->query(
"create table teacher (
 id  int(11) auto_increment primary key,
 name varchar(30) not null,
 email  varchar(30) not null
)"
);