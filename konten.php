<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="uts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


</head>

<body>

    <nav class="navbar">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">PBW</a>
            <span class="navbar-text">Selamat datang Nisaur Rohmah</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PRAKTIKUM PBW A</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="konten.php">Daftar Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Informasi Tugas</a>
                        </li>
                        <button type="button" id="logout" class="btn btn-danger" href="index.php">Logout</button>


                </div>
            </div>
        </div>
    </nav>

    <!-- konten -->
    <h2>DAFTAR MAHASISWA<br> PEMROGRAMAN BERBASIS WEB</h2>
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-success btn-sm"><a href="tambah.php" style="color:white";>Tambah Data</a></button>
            <button type="button" class="btn btn-danger btn-sm"></i>Cetak Laporan <i
                    class="bi bi-file-earmark-text-fill"></i></button>


            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari berdasarkan NIM" aria-label="Search">
                <button class="btn btn-outline-success btn-sm" type="submit"><i class="bi bi-search"></i></button>
            </form>


            <center>
            <table>
                <br><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ket</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
		                include 'koneksi.php';
		                $no = 1;
		                $data = mysqli_query($koneksi,"select * from datamhs");
		                while($d = mysqli_fetch_array($data)){
			                ?>
			                <tr>
				                <td><?php echo $no++; ?></td>
				                <td><?php echo $d['nim']; ?></td>
				                <td><?php echo $d['nama']; ?></td>
				                <td><?php echo $d['dosen']; ?></td>
				                <td><?php echo $d['status']; ?></td>
				                <td><?php echo $d['ket']; ?></td>
				                <td>
                                    <button type="button" class="btn btn-primary btn-sm"><a href="edit.php?id=<?php echo $d['id']; ?>" style="color:white";>EDIT</a></button> 
                                    <button type="button" class="btn btn-danger btn-sm""><a href="hapus.php?id=<?php echo $d['id']; ?>" style="color:white";>HAPUS</a></button>
				                </td>
			                </tr>
			                <?php 
		                }
		                ?>
                    </tbody>
                </table>
            </table>
        </center>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>