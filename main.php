<a href="###">kembali</a>

<?php

echo "<pre>";
print_r($_POST);
echo "<pre>";

$error = false;

if(@$_POST['nama']==''){
    echo "nama harus di isi<br/>";
    $error = true;
}
if(@$_POST['nim']==''){
    echo "nim harus di isi<br/>";
    $error = true;
}
if(strlen(@$_POST['no'])<10){
    echo "no telepon harus harus 9 digit<br/>";
    $error = true;
}

if(!$error){
    echo "terimakasih telah menginputkan data";
}