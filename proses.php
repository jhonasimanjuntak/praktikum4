INI ADALAH PROSES DARI FORM
<?php
//echo $_REQUEST['nilai1']." dan ".$_REQUEST['nilai2']."<br />";
if(isset($_REQUEST['$nilai1'])){
    $nilai1 = $_REQUEST['nilai1'];
}else{
    $nilai1 = 0;
}

if(!empty($_REQUEST['$nilai2'])){
    $nilai2 = $_REQUEST['nilai2'];
}else{
    $nilai2 = 0;
}

echo "Jumlah dari". $nilai1 ." ditambah dengan ".$nilai2. " adalah ".$nilai1+$nilai2;
?>