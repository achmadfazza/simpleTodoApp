<?php

require_once "../View/viewaddTodoList.php";
require_once "../Logic/showTodoList.php";
require_once "../Logic/addTodoList.php";

addTodoList("Faza");
addTodoList("Fiddaraini");
addTodoList("Al Achmad");

viewAddTodoList();
showTodoList();
