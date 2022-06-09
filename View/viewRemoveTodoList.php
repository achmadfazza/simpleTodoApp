<?php

require_once __DIR__ . "/../Logic/removeTodoList.php";
require_once __DIR__ . "/../Helper/input.php";

function viewRemoveTodoList()
{
  echo "MENGHAPUS TODO" . PHP_EOL;

  $pilihan = input("Pilih nomor untuk menghapus (x untuk batal)");

  if ($pilihan == "x") {
    echo "Batal menghapus todo" . PHP_EOL;
  } else {
    $success = removeTodoList($pilihan);
    if ($success) {
      echo "Sukses menghapus todo $pilihan" . PHP_EOL;
    } else {
      echo "Gagal menghapus todo $pilihan" . PHP_EOL;
    }
  }
}
