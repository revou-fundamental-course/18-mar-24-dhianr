<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVSP</title>
</head>
<body>
    <h1>Berhasil Reservasi!</h1>
    <h4>Berikut Rincian pemesanan:</h4>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$submit = $_POST['submit'];
$name = $_POST['name'];
$email = $_POST['email'];
$destination = $_POST['dest'];

echo "Pemesan : $name</br>";
echo "Email : $email</br>";
echo "Destinasi : $destination </br>";
}