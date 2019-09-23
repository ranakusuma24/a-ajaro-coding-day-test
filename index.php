<?php
include("koneksi.php");
?>
<nav>
        <a href="form_tambah.php">[+] Tambah Baru</a>
   
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    </nav>
<?php endif; ?>
<html>
<body>
<br> <H1>TABEL SISWA DI BANJAR 1 </H1>
<table border="1">
<tr>
<td>NO</td>
<td>NAMA</td>
<td>TINDAKAN</td>
</tr>
<?php
$sql = "select * from banjar1";
$query = mysqli_query($db,$sql);
while($banjar1 = mysqli_fetch_array($query)){
    echo "<tr>";
         echo "<td>".$banjar1['no']."</td>";
         echo "<td>".$banjar1['nama']."</td>";

         echo "<td>";
    echo "<a href='form_tambah.php?id=".$banjar1['no']."'>Edit</a> | ";
    echo "<a href='hapus.php?id=".$banjar1['no']."'>Hapus</a>";
    echo "</td>";
        
    echo "</tr>";
}
    ?>
</table>
</body>
</html>