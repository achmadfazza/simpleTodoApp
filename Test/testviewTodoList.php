<?php

require_once "../View/viewShowTodoList.php";
require_once "../Logic/addTodoList.php";

addTodoList("Faza");
addTodoList("Fiddaraini");
addTodoList("Al");
addTodoList("Achmad");

viewShowTodoList();
