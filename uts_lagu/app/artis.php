<?php

include "koneksi.php";

class artis extends koneksi {

  public function __construct() {
    parent::__construct();
  }

  public function input() {
    $id          = $_POST['artist_id'];
    $nama_artis  = $_POST['artist_name'];

    $sql = "INSERT INTO artist (artist_id, artist_name) VALUES (:artist_id, :artist_name)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->bindParam(":artist_name", $idkat);
    $stmt->execute();

    return false;
  }

  public function tampil()
  {
    $sql = "SELECT * FROM artist ";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();

    $data = [];
    while ($row = $stmt->fetch()) {
      $data[] = $row;
    }

    return $data;
  }

  public function edit($id)
  {
    $sql = "SELECT * FROM artist WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
  }

  public function update()
  {
    $id          = $_POST['artist_id'];
    $nama_artis  = $_POST['artist_name'];

    $sql = "UPDATE artist SET artist_id=:artist_id, artist_name=:artist_name WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_name", $nama_artis);
    $stmt->bindParam(":artist_id", $id);

    $stmt->execute();

    return false;
  }

  public function delete($id)
  {
    $sql = "DELETE FROM artist WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    return false;
  }
}