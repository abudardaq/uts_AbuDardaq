<?php

include_once "app/user.php";

$users = new users();

if ($_POST['btn-simpan']) {
  $produk->input();
  header("location:index.php?page=tampilan_user");
}

if ($_POST['btn-edit']) {
  $produk->update();
  header("location:index.php?page=tampilan_user");
}

if ($_GET['delete-id']) {
  $produk->delete($_GET['delete-id']);
  header("location:index.php?page=tampilan_user");
}