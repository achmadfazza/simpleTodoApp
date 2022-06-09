<?php
require_once "../Logic/addTodoList.php";
require_once "../Model/todoList.php";
require_once "../View/viewRemoveTodoList.php";
require_once "../Logic/showTodoList.php";

addTodoList("Faza");
addTodoList("Lina");
addTodoList("Thia");
addTodoList("Nafi");

showTodoList();

viewRemoveTodoList();

showTodoList();
