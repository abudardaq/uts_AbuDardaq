<?php

include_once "app/order.php";

$users = new users();

if ($_POST['btn-simpan']) {
  $produk->input();
  header("location:index.php?page=tampilan_order");
}

if ($_POST['btn-edit']) {
  $produk->update();
  header("location:index.php?page=tampilan_order");
}

if ($_GET['delete-id']) {
  $produk->delete($_GET['delete-id']);
  header("location:index.php?page=tampilan_order");
}

if ($_POST['btn-tambah']) {
	$produk->tambah($_POST['tambah-id']);
  header("location:index.php?page=tampilan_order");
}