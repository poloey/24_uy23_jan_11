<?php 

$con = mysqli_connect('localhost', 'root', '', 'fgc2');

$con->query("insert into teachers (name, email) values('monjur', 'm@gmail.com')");
$con->query("insert into teachers (name, email) values('shamima', 's@gmail.com')");
$con->query("insert into teachers (name, email) values('farhana', 'f@gmail.com')");
$con->query("insert into teachers (name, email) values('faria', 'f@gmail.com')");
$con->query("insert into teachers (name, email) values('tahmina', 't@gmail.com')");
$con->query("insert into teachers (name, email) values('sajed', 's@gmail.com')");
