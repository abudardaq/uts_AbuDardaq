<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
    <link href="layout/asset/css/style.css" type="text/css" rel="stylesheet">
</head>
</head>
<body>  

        
        <header>
            <img src="layout/asset/images/banner2.jpg" alt="garudaa5">
         
            
        </header>

        <nav class="navigasi">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tampil_artis.php">Artis</a></li>
                <li><a href="tampil_album.php">Album</a></li>
                <li><a href="tampil_treck.php">Treck</a></li>
                <li><a href="tampil_played.php">Played</a></li>
            </ul>
        </nav>
 
        <div class="menu-tengah">
            <div class="kotak">
<?php

require_once "app/album.php";

$album = new album();
$rows = $album->tampil();

?>

<table>
    <tr>
        <td>ID Artist</td>
        <td>ID Album</td>
        <td>Nama Album</td>
        <td>Aksi</td>
    </tr>

    <?php foreach ($rows as $row) { ?>

        <tr>
            <td><?php echo $row['artist_id']; ?></td>
            <td><?php echo $row['album_id']; ?></td>
            <td><?php echo $row['album_name']; ?></td>
            <td><a href="edit_album.php">Edit</a> | <a href="hapus_album.php">Hapus</a></td>
        </tr>

    <?php } ?>
</table>
 
            </div>
        </div>
        </div>
 
        <footer>
            Copyright by AbuDardaqPutra&copy;
        </footer>
 
    </div>
 
</body>
</html>