<?php

require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../Logic/addTodoList.php";
require_once __DIR__ . "/../Helper/input.php";

function viewAddTodoList()
{
  echo "MENAMBAH TODO" . PHP_EOL;

  $todo = input("Todo (x untuk batal)");

  if ($todo == "x") {
    echo "Batal menambahkan" . PHP_EOL;
  } else {
    addTodoList($todo);
  }
}
