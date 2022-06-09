<?php
//Menampilkan daftar todolist

function showTodoList()
{
  global $todoList;

  echo "DAFTAR TODOLIST" . PHP_EOL;

  foreach ($todoList as $number => $value) {
    echo "$number.$value" . PHP_EOL;
  }
}
