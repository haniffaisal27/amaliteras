<?php
include ('db.php');
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
        <table>
            <caption>maklumat pekerja</caption>
            <tr>
                <td class="head">Bil</td>
                <td class="head">Id</td>
                <td class="head">Nama</td>
                <td class="head">Nombor Kad Pengenalan</td>
                <td class="head">Jantina</td>
                <td class="head">Nombor Telefon</td>
                <td class="head">Operation</td>
            </tr>
            <?php
            $sql = "SELECT * FROM pekerja ORDER BY id ASC";
            $data = mysqli_query($conn, $sql);
            $bil = 1;
            while ($pelajar = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class="bilnum"><?php echo $bil; ?></td>
                    <td><?php echo $pelajar['id']; ?></td>
                    <td><?php echo $pelajar['namapelajar']; ?></td>
                    <td><?php echo $pelajar['nokp']; ?></td>
                    <td><?php echo $pelajar['jantina']; ?></td>
                    <td><?php echo $pelajar['notel']; ?></td>
                    <td>
                        <a href="updatepng.php?nokp=<?php echo $pelajar['nokp'];?>">
                        <img src=update.png style="height: 20px; width: 20px;"> </a> 
                        <a href="deletepng.php?nokp=<?php echo $pelajar['nokp'];?>">
                        <img src=delete.kpg.png style="height: 30px; width: 30px;"> </a> 
                    </td> 
                </tr> 
            <?php $bil = $bil + 1; 
            } 
            ?> 
        </table>
        <button><a href="add.php">Tambah nama</a></button>
        
    </center>
</body>

</html>