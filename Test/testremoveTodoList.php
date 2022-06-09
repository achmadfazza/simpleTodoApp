<?php

require_once "../Model/todoList.php";
require_once "../Logic/removeTodoList.php";
require_once "../Logic/addTodoList.php";
require_once "../Logic/showTodoList.php";


addTodoList("Faza");
addTodoList("Thia");
addTodoList("Lina");
addTodoList("Nafi");
addTodoList("Nisa");


showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(5);
var_dump($success);
showTodoList();
