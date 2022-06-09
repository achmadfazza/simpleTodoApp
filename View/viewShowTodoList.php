<?php
require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../Logic/showTodoList.php";
require_once __DIR__ . "/../View/viewaddTodoList.php";
require_once __DIR__ . "/../View/viewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/input.php";

function viewShowTodoList()
{
  while (true) {

    showTodoList();

    echo "Menu" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "X  Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if ($pilihan == "1") {
      viewAddTodoList();
    } elseif ($pilihan == "2") {
      viewRemoveTodoList();
    } elseif ($pilihan == "x") {
      break;
    } else {
      echo "Pilihan Tidak Dimengerti" . PHP_EOL;
    }
  }

  echo "Sampai Jumpa Lagi" . PHP_EOL;
}
