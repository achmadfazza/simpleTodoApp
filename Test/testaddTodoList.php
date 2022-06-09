<?php

require_once "../Model/todoList.php";
require_once "../Logic/addTodoList.php";

addTodoList("Faza");
addTodoList("Nafi");
addTodoList("Nisa");
addTodoList("Sultan");


var_dump($todoList);
