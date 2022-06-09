<?php
//menghapus todolist
function removeTodoList(int $number)
{
  global $todoList;

  // jika var number lebih besar dari yg ada di todoList maka nilainya salah
  if ($number > sizeof($todoList)) {
    return false;
  }
  // menggunakan for untuk menggeser data terakhir
  for ($i = $number; $i < sizeof($todoList); $i++) {
    $todoList[$i] = $todoList[$i + 1];
  }
  // menghapus data terakhir todo
  unset($todoList[sizeof($todoList)]);

  return true;
}
