<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-validation</title>
</head>

<body>
    <h3>
        Form-Validation
    </h3>
    <br>
    <form method="POST" action="form-validation.php">
        <label for="nama"> Masukkan Nama: </label>
        <input type="text" name="nama" id="nama">
        <label for="email"> Masukkan email: </label>
        <input type="email" name="email" id="email">
        <!-- // -->
        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- Proses Form -->
    <?php

    if (isset($_POST['submit'])) {

        $nama_pengunjung = $_POST["nama"];
        $email_pengunjung = $_POST["email"];

        echo "hai selamat datang: " . $_POST["nama"];
        echo "email yang kamu masukkan adalah: " . $_POST["email"];
    }

    ?>
</body>

</html>