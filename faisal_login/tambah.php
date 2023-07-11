<?php
include('db.php'); 
if(isset($_POST['nokp'])) {    
    $id = $_POST['id'];
    $namapelajar = $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
	$notel = $_POST['notel'];
    $sql = "INSERT INTO pekerja (id, namapelajar, nokp, jantina, notel)
    VALUES ('$id', '$namapelajar', '$nokp', '$jantina', '$notel')";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <form action="tambah.php" method="POST">
        <table>
            <tr>
                <td class=warna> Id </td>
                <td> <input type="text" name="id" placeholder=""> </td>
            </tr>
            <tr>
                <td class=warna> Nama Anda </td>
                <td> <input type="text" name="namapelajar" placeholder=""> </td>
            </tr>
            <tr>
                <td class=warna> No Kad Pengenalan </td>
                <td> <input type="text" name="nokp" placeholder=""></td>
            </tr>
            <tr>
                <td class=warna> Jantina</td>
                <td> <input type="text" name="jantina" placeholder=""></td>
            </tr>
            <tr>
                <td class=warna> Nombor Telefon</td>
                <td> <input type="text" name="notel" placeholder=""></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    </center>
</body>
</html>