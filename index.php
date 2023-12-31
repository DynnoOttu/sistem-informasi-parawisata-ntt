<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include "superadmin/enkripsivariabel.php";
?>

<head>
  <title>Pesona NTT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="image/icon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
    .color-change-3x {
      -webkit-animation: color-change-3x 4s linear infinite alternate both;
      animation: color-change-3x 4s linear infinite alternate both;
    }

    /* ----------------------------------------------
 * Generated by Animista on 2020-11-22 6:18:48
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
 * ----------------------------------------
 * animation color-change-3x
 * ----------------------------------------
 */
    @-webkit-keyframes color-change-3x {
      0% {
        background: #0087ff;
      }

      50% {
        background: #05ecc6;
      }

      100% {
        background: #01df3b;
      }
    }

    @keyframes color-change-3x {
      0% {
        background: #0087ff;
      }

      50% {
        background: #05ecc6;
      }

      100% {
        background: #01df3b;
      }
    }



    .zoom {
      transition: transform .2s;
      /* Animation */
      margin: 0 auto;
    }

    .zoom:hover {
      transform: scale(1.1);
      /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    /* ----------------------------------------------
 * Generated by Animista on 2020-12-1 5:56:11
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
 * ----------------------------------------
 * animation scale-in-center
 * ----------------------------------------
 */
    @-webkit-keyframes scale-in-center {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes scale-in-center {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    .scale-in-center {
      -webkit-animation: scale-in-center 2s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: scale-in-center 2s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    /* ----------------------------------------------
 * Generated by Animista on 2020-12-1 6:8:12
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
 * ----------------------------------------
 * animation tilt-in-right-1
 * ----------------------------------------
 */
    @-webkit-keyframes tilt-in-right-1 {
      0% {
        -webkit-transform: rotateX(-30deg) translateX(300px) skewX(30deg);
        transform: rotateX(-30deg) translateX(300px) skewX(30deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0deg) translateX(0) skewX(0deg);
        transform: rotateX(0deg) translateX(0) skewX(0deg);
        opacity: 1;
      }
    }

    @keyframes tilt-in-right-1 {
      0% {
        -webkit-transform: rotateX(-30deg) translateX(300px) skewX(30deg);
        transform: rotateX(-30deg) translateX(300px) skewX(30deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0deg) translateX(0) skewX(0deg);
        transform: rotateX(0deg) translateX(0) skewX(0deg);
        opacity: 1;
      }
    }

    .tilt-in-right-1 {
      -webkit-animation: tilt-in-right-1 0.6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: tilt-in-right-1 0.6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }
  </style>
</head>

<body class="color-change-3x">

  <!-- watsapp -->
  <a style="position: fixed; background-image: url(image/icon-wa.png); bottom: 0; width: 70px; height: 50px; margin: 20px; right: 0; background-repeat: round; z-index: 2;" href="https://api.whatsapp.com/send?phone=6282197818711&amp;text=From+Pesona NTT%3A%0D%0ADear+Super+Admin+Pesona NTT.+Saya+ingin+berkonsultasi.%0D%0ABerikut+ini+adalah+identitas+saya%3A" target="_blank" title="Hubungi kami via Whatsapp"></a>

  <?php
  //Koneksi ke database
  include 'superadmin/konektor.php'; ?>

  <div class="container shadow p-4 mb-4 bg-white">

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/benner1.jpg" alt="Los Angeles" width="100%" height="100%">
        </div>
        <div class="carousel-item">
          <img src="image/benner2.jpg" alt="Chicago" width="100%" height="100%">
        </div>
        <div class="carousel-item">
          <img src="image/benner3.jpg" alt="New York" width="100%" height="100%">
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <br>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" style="background-image: url(image/navbar2.jpg);background-size: cover;>
<img src=" image/icon2.png" width="55px" height="35px"> <a class="navbar-brand text-light" href="#">Pesona NTT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php"><i style='font-size:20px' class='fas'>&#xf015;</i> Beranda</a>
          </li>
          <?php
          if ($_SESSION['status'] != "login") { ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="#" data-toggle="modal" data-target="#myModalloginuser">Login</a>
            </li>
          <?Php } else { ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="logoutUser.php"><i style='font-size:20px' class='fas'>&#xf2f5;</i> Logout</a>
            </li>
          <?php }
          ?>

        </ul>
      </div>
    </nav>
    <br>
    <!-- The Modal Login User-->
    <div class="modal fade" id="myModalloginuser">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header" style="background-image: url(image/navbar2.jpg);background-size: cover;">
            <h4 class="modal-title text-light">Login Wisatawan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form method="post" action="CekLoginUser.php">
              <!-- Input Text Field-->
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Telepon</span>
                </div>
                <input type="number" class="form-control" required name="telepon">
              </div>

              <!-- Input Text Field-->
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Password</span>
                </div>
                <input type="password" class="form-control" required name="sandi">
              </div>

          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <input class="btn btn-success" type="submit" value="Simpan"></form>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModaldaftarwisatawan" data-dismiss="modal">Daftar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal Daftar Wisatawan-->
    <div class="modal fade" id="myModaldaftarwisatawan">
      <div class="modal-dialog modal-md">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header" style="background-image: url(image/navbar2.jpg);background-size: cover;">
            <h4 class="modal-title text-light">Daftar Wisatawan Baru</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form onsubmit="return confirm('Yakin ingin menambah data sekarang?');" method="post" action="insertuser.php">
              <!-- Input Text Field-->
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Nama Wisatawan</span>
                </div>
                <input pattern="[A-Za-z ]+" class="form-control" required type="text" name="namawisatawan">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Telepon</span>
                </div>
                <input class="form-control" required type="number" name="telepon">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Email</span>
                </div>
                <input class="form-control" required type="email" name="email">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Password</span>
                </div>
                <input class="form-control" required type="password" name="sandi">
              </div>

              <!-- Input radio Group-->
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Jenis Kelamin</span>
                </div> &nbsp;&nbsp;
                <div class="custom-control  custom-radio custom-control-inline">
                  <input required type="radio" class="custom-control-input" id="customRadio" name="jenis_kelamin" value="LakiLaki">
                  <label class="custom-control-label" for="customRadio">Laki - Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input required type="radio" class="custom-control-input" id="customRadio2" name="jenis_kelamin" value="Perempuan">
                  <label class="custom-control-label" for="customRadio2">Perempuan</label>
                </div>
              </div>
          </div>


          <!-- Modal footer -->
          <div class="modal-footer">
            <input class="btn btn-success" type="submit" value="Simpan"></form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-sm-3">

        <!-- Cara 2 Jika halaman login menyatu dengan halaman index -->
        <?php
        if ($_SESSION['status'] != "login") {
        } else {
        ?>
          <div class="alert alert-warning"> <i style='font-size:20px' class='far'>&#xf118;</i>
            <?php
            $data = mysqli_query($konektor, "SELECT * FROM tbl_wisatawan where telepon like '$_SESSION[username]'");
            if (mysqli_num_rows($data) > 0) {
              while ($d = mysqli_fetch_array($data)) {
                echo 'Selamat Datang ' .  $d['namawisatawan'];
            ?> <a href="#" data-toggle="modal" data-target="#myModaledituser"><i style='font-size:14px' class='far'>&#xf044;</i></a> <?php
                                                                                                                                      }
                                                                                                                                    } else {
                                                                                                                                      echo 'telah Terjadi Perubahan Data . Silahkan Login Kemabali';
                                                                                                                                    } ?> </div>
        <?php }
        ?>

        <!-- Cek pesan notifikasi -->
        <?php
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] == "UbahBerhasil") { ?>
            <div class="alert alert-info"><i style='font-size:14px' class='fas'>&#xf05a;</i> Data telah berhasil diubah </div>
          <?php  } else if ($_GET['pesan'] == "logout") { ?>
            <div class="alert alert-info"><i style='font-size:14px' class='fas'>&#xf05a;</i> Anda telah berhasil logout </div>
          <?php  } else if ($_GET['pesan'] == "DataBerhasilTersimpan") { ?>
            <div class="alert alert-info"><i style='font-size:14px' class='fas'>&#xf05a;</i> Data berhasil tersimpan </div>
          <?php  } else if ($_GET['pesan'] == "gagal") { ?>
            <div class="alert alert-danger"><i style='font-size:14px' class='fas'>&#xf05a;</i> Login gagal </div>
        <?php  }
        }
        ?>


        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <li class="list-group-item active"><i style='font-size:24px' class='fas'>&#xf5bb;</i> Daftar Objek Wisata</li>
        <ul class="list-group" id="myList">
          <?php
          //Mencari data di dalam database sesuai dengan inputan yang dimasukan
          $data = mysqli_query($konektor, "SELECT * from tbl_objekwisata where status like '1' order by idobjekwisata desc");
          if (mysqli_num_rows($data) > 0) {
            while ($d = mysqli_fetch_array($data)) {

          ?>
              <a style="text-decoration:none" href="displayObjek.php?idobjekwisata=<?php echo kunci($d['idobjekwisata']); ?>">
                <li class="list-group-item list-group-item-action zoom"><i style='font-size:24px' class='fas'>&#xf4d8;</i> <?php echo $d['nama']; ?> </li>
              </a>
          <?php }
          }
          ?>
        </ul>
        <script>
          $(document).ready(function() {
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myList li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>
        <!-- The Modal Edit User-->
        <div class="modal fade" id="myModaledituser">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="background-image: url(image/navbar2.jpg);background-size: cover;">
                <h4 class="modal-title text-light">Edit Data Anda</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <?php
                //Mencari data di dalam database sesuai dengan inputan yang dimasukan
                $data1 = mysqli_query($konektor, "select * from tbl_wisatawan where telepon like '$_SESSION[username]'");
                if (mysqli_num_rows($data1) > 0) {
                  while ($d1 = mysqli_fetch_array($data1)) { ?>
                    <!-- Form ubah data menyatu dengan form index-->
                    <form onsubmit="return confirm('Yakin ingin mengubah data sekarang?');" method="post" action="edituser.php">
                      <!-- Hiden fill idkategori -->
                      <input type="hidden" name="idwisatawan" value="<?php echo $d1['idwisatawan']; ?>">
                      <!-- Edit Text Field-->
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Nama Wisatawan</span>
                        </div>
                        <input type="text" class="form-control" required name="namawisatawan" value="<?php echo $d1['namawisatawan']; ?>">
                      </div>
                      <!-- Edit Text Field-->
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Telepon</span>
                        </div>
                        <input type="number" class="form-control" readonly name="telepon" value="<?php echo $d1['telepon']; ?>">
                      </div>
                      <!-- Edit Text Field-->
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Email</span>
                        </div>
                        <input type="email" class="form-control" required name="email" value="<?php echo $d1['email']; ?>">
                      </div>
                      <!-- Edit Text Field-->
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Password</span>
                        </div>
                        <input type="password" class="form-control" required name="sandi" value="<?php echo $d1['sandi']; ?>">
                      </div>

                      <!-- Edit radio group jenis kelamin-->
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Jenis Kelamin</span>
                        </div> &nbsp;&nbsp;
                        <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if ($d1['jenis_kelamin'] == 'Laki-Laki') echo 'checked' ?>> Laki-Laki</label>
                        &nbsp;&nbsp;<label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($d1['jenis_kelamin'] == 'Perempuan') echo 'checked' ?>> Perempuan</label>
                      </div>

                  <?php  }
                }
                  ?>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <input class="btn btn-success" type="submit" value="Simpan"></form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <?php
        $data = mysqli_query($konektor, "select * from tbl_objekwisata where status like '1' order by idobjekwisata desc");
        if (mysqli_num_rows($data) > 0) {
          while ($d = mysqli_fetch_array($data)) { ?>
            <div class="row">
              <div class="col-sm-4">
                <?php
                //Display image
                $file = $d['idobjekwisata'];
                if (file_exists("superadmin/berkas/$file.jpg")) {
                ?><img class="img-thumbnail scale-in-center" src="superadmin/berkas/<?php echo $d['idobjekwisata']; ?>.jpg" width="100%" height="90px" />
                  <div class="alert alert-info scale-in-center">
                    <i style='font-size:20px' class='fas'>&#xf4d8;</i> <?php echo $d['nama'] . ' ' . $d['alamat']; ?>
                  </div>
                <?php
                } else { ?>
                  <center><img class="img-thumbnail scale-in-center" src="superadmin/berkas/kosong.jpg" width="80" height="80" /></center>
                  <div class="alert alert-info scale-in-center">
                    <i style='font-size:20px' class='fas'>&#xf4d8;</i> <?php echo $d['nama'] . ' ' . $d['alamat']; ?>
                  </div>
                <?php
                }
                ?>
              </div>

              <div class="col-sm-8 tilt-in-right-1">
                <?php
                $isi = $d['deskripsi'];
                $Lebar = strlen($isi);
                if ($Lebar > 217) {
                  echo substr($isi, 0, 217); ?> <a href="displayObjek.php?idobjekwisata=<?php echo kunci($d['idobjekwisata']); ?>">Selengkapnya.. </a> <?php
                                                                                                                                                  } else {
                                                                                                                                                    echo $isi;
                                                                                                                                                  }
                                                                                                                                                    ?>
              </div>
            </div>
        <?php  }
        }
        ?>

      </div>
      <div class="col-sm-3">
        <?php
        //Mencari data di dalam database sesuai dengan inputan yang dimasukan
        $data = mysqli_query($konektor, "SELECT  tbl_testimoni.idtestimoni, tbl_testimoni.tanggal, tbl_wisatawan.namawisatawan, tbl_objekwisata.nama, tbl_testimoni.deskripsi, tbl_objekwisata.idobjekwisata FROM `tbl_testimoni`,tbl_wisatawan,tbl_objekwisata WHERE tbl_testimoni.idwisatawan = tbl_wisatawan.idwisatawan AND tbl_testimoni.idobjekwisata = tbl_objekwisata.idobjekwisata AND tbl_testimoni.status = '1' ORDER BY tbl_testimoni.idtestimoni DESC LIMIT 5");
        if (mysqli_num_rows($data) > 0) {
          while ($d = mysqli_fetch_array($data)) { ?>
            <div class="toast" data-autohide="false">
              <div class="toast-header">
                <a style"text-decortion:none" href="displayObjek.php?idobjekwisata= <?php echo kunci($d['idobjekwisata']); ?>"> <strong class="mr-auto text-primary"><i style='font-size:20px' class='fas'>&#xf4d8;</i> <?php echo $d['nama']; ?></strong> </a>
                <hr> <small class="text-muted"><?php echo $d['tanggal']; ?></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
              </div>
              <div class="toast-body">
                <?php echo $d['namawisatawan']; ?> : <?php echo $d['deskripsi']; ?>
              </div>
            </div>


            <script>
              $(document).ready(function() {
                $('.toast').toast('show');
              });
            </script>
        <?php }
        }
        ?>

      </div>
    </div>

  </div>

</body>

</html>