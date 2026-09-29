<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=locationauto", "root", "");
} catch (PDOException $eror) {
    print($eror->getMessage());
}finally{
    print("connect");
}
?>