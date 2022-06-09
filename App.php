<?php

require_once __DIR__ .  "/Model/todoList.php";
require_once __DIR__ .  "/Logic/showTodoList.php";
require_once __DIR__ .  "/Logic/addTodoList.php";
require_once __DIR__ .  "/Logic/removeTodoList.php";
require_once __DIR__ .  "/View/viewShowTodoList.php";
require_once __DIR__ .  "/View/viewAddTodoList.php";
require_once __DIR__ .  "/View/viewRemoveTodoList.php";
require_once __DIR__ .  "/Helper/input.php";



echo "APLIKASI TODO-LIST" . PHP_EOL;

viewShowTodoList();
