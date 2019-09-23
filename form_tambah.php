<html>
<head>
    <title>Formulir penambahan siswa di banjar 1 | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Formulir penambahan siswa di banjar 1 </h3>
    </header>

    <form action="proses_tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="no">No: </label>
            <input type="text" name="nomor" placeholder="nomor" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" />
        </p>     
        <p>
            <input type="submit" value="tambah" name="tambah" />
        </p>
        </fieldset>

    </form>
    </body>

</html>