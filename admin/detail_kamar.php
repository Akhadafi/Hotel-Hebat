<?php
session_start();

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "hotel-hebat");

if (!isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}
if ($_SESSION['role'] != "Admin") {
  echo "
            <script>
                alert('Anda bukan admin!');
                window.location.href = '../resepsionis/pelanggan.php';
            </script>
        ";
}
// ambil data di URL
$id_kamar = $_GET["id_kamar"];
// query data berdasarkan id
$DetailKamar = mysqli_query($conn, "SELECT * FROM kamar WHERE id_kamar = $id_kamar");
// ambil baris dari query
$ResultDetailKamar = mysqli_fetch_assoc($DetailKamar);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="../vendor/bootstrap.min.css">
  <!-- Data Tabel -->
  <link rel="stylesheet" href="../vendor/dataTables.bootstrap5.min.css">
  <script src="../vendor/jquery-3.5.1.js"></script>
  <script src="../vendor/jquery.dataTables.min.js"></script>
  <script src="../vendor//dataTables.bootstrap5.min.js"></script>
  <title>Detail</title>
</head>

<body style="margin-top: 80px;">
  <!-- Navbar -->
  <?php
  include './navbar.php'
  ?>
  <!-- Navbar -->

  <!-- Detail -->
  <div class="container">
    <table class="table table-striped" style="width:100%">
      <tbody>
        <tr>
          <td>
            <h4>Nama kamar: </h4>
            <h5><?= $ResultDetailKamar['nama_kamar']; ?></h5>
          </td>
          <td>
            <h4>Total kamar: </h4>
            <h5><?= $ResultDetailKamar['total_kamar']; ?></h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Detail -->

  <!-- Bootstrap JS -->
  <script src="../vendor/bootstrap.bundle.min.js"></script>
  <!-- Data Tabel -->
  <script>
    $(document).ready(function() {
      $('#kamar').DataTable();
    });
  </script>

</body>

</html>