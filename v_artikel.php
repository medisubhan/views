<html>
<head><title><?php echo $title; ?></title></head>
<body>
<?php
foreach($query->result() as $row){
echo “<h3> “.$row[‘judul’].” </h3>”; 
echo “tanggal : “.$row[‘tgl’].”.  “.$row[‘isi’].”<br>”;
echo “<hr>”;
}
?>
</body>
</html>
