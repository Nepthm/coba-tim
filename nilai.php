<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai</title>
</head>
<style>
    input {
        display: block;
        margin-top: 10px;
    }
</style>

<body>
    <form action="nilai.php" method="post">
        <input type="text" name="nama" placeholder="Nama Siswa">
        <input type="text" name="mapel" placeholder="Mata Pelajaran">
        <input type="text" name="nilai" placeholder="Nilai ">
        <button type="submit" name="submit">Submit</button>
    </form>

    <table border="2">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Mape</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>

            <?php session_start(); ?>
            <?php if (isset($_POST["submit"])) : ?>
                <?php if (!isset($_SESSION["i"])) {
                    $_SESSION["i"] = 1; // inisialisasi nilai $i jika session belum ada
                } ?>
                <?php $data = [
                    "nama" => $_POST["nama"],
                    "mapel" => $_POST["mapel"],
                    "nilai" => $_POST["nilai"]
                ]; ?>

                <tr>
                    <th><?= $_SESSION["i"]++; ?></th>
                    <th><?= $data["nama"]; ?></th>
                    <th><?= $data["mapel"] ?></th>
                    <th><?= $data["nilai"]; ?></th>
                </tr>

            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>