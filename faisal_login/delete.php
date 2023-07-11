<?php
 include('db.php');
 $nokp = $_GET['nokp'];
 $sql = "DELETE FROM pekerja WHERE nokp= '$nokp'";
 $result = mysqli_query($conn, $sql);
 if ($result)
     echo "<script>alert('Berjaya padam rekod')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='index.php'</script>";
?>