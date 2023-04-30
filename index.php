<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1 </title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" autofocus>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        var_dump($_REQUEST);
        die;
        $nama = $_POST['nama'];
        echo "Nama yang di input: " . $nama;
    }
    ?>
</body>
</body>

</html>