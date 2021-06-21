<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
    <link href="layout/asset/css/style.css" type="text/css" rel="stylesheet">
</head>
</head>
<body>  
     
    <div class="badan-utama">
        
        <header>
            <img src="layout/asset/images/sky1.png" alt="garudaa5">
         
            
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
                  <h3>TAMBAH DATA USER</h3>
                <p></p>
            <form method="POST" action="proses_user.php">
        <table>
        <tr>
            <td>ID User</td>
            <td><input type="text" name="user_id"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama" ></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="user_alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>



 
            </div>
        </div>
        </div>
 
        <footer>
            Copyright by AbuDardaqPutra&copy;
        </footer>
 
    </div>
 
</body>
</html>