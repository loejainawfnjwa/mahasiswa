<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
  <div class="container">
  <br>
    <center>
    <h2>Data Mahasiswa</h2>
    </center>
  <br>
  <table class="table table-bordered text-center">
      <tr>
        <td>No</td>
        <td>Fakultas</td>
        <td>Prodi</td>
        <td>Kelas</td>
        <td>Isi</td>
      </tr>
    <?php 
    $no = 1;
foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td><?php echo $no++; ?></th>
        <td><?php echo $mhs['fakultas']; ?></td>
        <td><?php echo $mhs['prodi']; ?></td>
        <td><?php echo $mhs['kelas']; ?></td>
        <td><?php echo $mhs['isi']; ?></td>
    </tr>
<?php endforeach; ?>

  </table>
  </div>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>