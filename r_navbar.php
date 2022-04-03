<nav class="navbar fixed-top navbar-expand-sm navbar-dark border-bottom border-top" style="background-color: black;">
  <div class="container-fluid">
    <div class="d-flex" href="#">
      <img src="./img/user/pp/<?= $_SESSION['gambar']; ?>" alt="Avatar Logo" style="width: 50px;" class="rounded-pill">
      <div class="navbar-brand mx-1"><?= $_SESSION['username']; ?></div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="mynavbar">
    <div class="mx-auto container">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="./resepsionis.php">Resepsionis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./tamu.php">Tamu</a>
        </li>
        <li class="nav-item">
          <a href="./logout.php" class="btn btn-outline-danger" onclick="return confirm('yakin keluar?');">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>