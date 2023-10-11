<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="get.php">
        <label>Nilai 1</label>
        <input type="text" name="nilai1">
        <br/>

        <label>Nilai 2</label>
        <input type="text" name="nilai2">

        <input type="submit" value="PROSES" />
    </form>
</body>
</html>

<?php
echo $_GET['nilai1']." dan ".$_GET['nilai2']."<br />";
$nilai1 = $_GET['nilai1'];
$nilai2 = $_GET['nilai2'];

echo "Jumlah dari". $nilai1 ." ditambah dengan ".$nilai2. " adalah ".$nilai1+$nilai2;
?>