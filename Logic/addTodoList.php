<?php
//menambah todolist
function addTodoList(string $todo)
{
  // mengambil global todo
  global $todoList;
  // var number dengan cara cek data di todolist + 1
  $number = sizeof($todoList) + 1;
  // number yang sudah dicek menjadi todo berikutnya
  $todoList[$number] = $todo;
}
