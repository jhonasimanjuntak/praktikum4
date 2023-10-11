<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="request" action="proses.php">
        <label>Nilai 1</label>
        <input type="text" name="nilai1">
        <br/>

        <label>Nilai 2</label>
        <input type="text" name="nilai2">

        <input type="submit" value="Hitung" />
    </form>
</body>
</html>

<?php
echo $_REQUEST['nilai1']." dan ".$_REQUEST['nilai2']."<br />";
$nilai1 = $_REQUEST['nilai1'];
$nilai2 = $_REQUEST['nilai2'];

echo "Jumlah dari". $nilai1 ." ditambah dengan ".$nilai2. " adalah ".$nilai1+$nilai2;
?>