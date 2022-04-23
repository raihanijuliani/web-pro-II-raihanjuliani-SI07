<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
    <div class="content-wrapper">
    <div class="bg-primary"><br>
        <h1 class="text-center text-white">Form Body Mass Index</h1>
        <br>
    </div>

    <br>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card border-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title text-white">Form BMI</h3>

                <div class="card-tools">
                </div>
              </div>
              <div class="card-body">
                  <form action="" autocomplete="off" method="POST">
                <div class=" form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Anda</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend h-5">
                      <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                      </div>
                    </div> 
                        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control">
                    </div>
                </div>
              </div>
                
              <br>
                
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email Anda</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                      </div>
                    </div> 
                        <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control">
                    </div>
                </div>
                </div>

                <br>

                <div class="form-group row">
                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </div>
                    </div> 
                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text"
                            class="form-control">
                    </div>
                </div>
                </div>
                
                <br>

                <div class="form-group row">
                    <label for="bb" class="col-4 col-form-label">Berat Badan</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-child"></i>
                      </div>
                    </div> 
                        <input id="bb" name="bb" placeholder="Masukkan Berat Badan (KG)" type="text" class="form-control">
                    </div>
                </div>
                </div>

                <br>

                <div class="form-group row">
                    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-child"></i>
                      </div>
                    </div> 
                        <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan (CM)" type="text" class="form-control">
                    </div>
                </div>
                </div>

                <br>

                <div class="form-group row">
                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Periksa</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div> 
                        <input id="tgl_periksa" name="tgl_periksa" type="date" class="form-control">
                    </div>
                </div>
                </div>

                <br>

                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input"
                                value="L">
                            <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input"
                                value="P">
                            <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-warning" href="index.php" role="button">Reset</a>
                    </div>
                </div>
            </form>
</div>
            <div class="card-footer bg-primary">
            <b class="text-white">Noted:</b><p class="text-white">Hasil Table Input Akan Muncul Dibawah, Mohon isi data dan submit terlebih dahulu</p>
              </div>
            <?php
            error_reporting(0);
                require_once 'class_pasien.php';
                require_once 'class_bmiPasien.php';

                if (isset($_POST['submit'])) {
                $nama_pasien = $_POST['nama'];
                $tmp_lahir = $_POST['tmp_lahir'];
                $tgl_periksa = $_POST['tgl_periksa'];
                $email = $_POST['email'];
                $jk = $_POST['jenis_kelamin'];
                $bb = $_POST['bb'];
                $tb = $_POST['tb'];
                $hasilbmi = new bmiPasien($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, null); 
                $status = $hasilbmi -> nilai();
                }
            ?>

              </div>
              
              <!-- /.card-body -->
              <br>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->


            <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card border-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title text-white">Hasil BMI</h3>

                <div class="card-tools">
                </div>
              </div>
              <div class="card-body">
              <table class="table table-dark table-striped mt-4">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Kode Pasien</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Gender</th>
                <th scope="col">Berat (KG)</th>
                <th scope="col">Tinggi (CM)</th>
                <th scope="col">Nilai BMI</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                
            <?php
                $pasien1 = new bmiPasien('Dina', 'kode', '2022-01-10', '1.com', 'P', 60, 200, 'P001');
                $pasien2 = new bmiPasien('Naila', 'kode', '2022-01-10', '2.com', 'P', 55.3, 165, 'P002');
                $pasien3 = new bmiPasien('Ijul', 'kode', '2022-01-11', '3.com', 'P', 45.2, 171, 'P003');

            
            
                // panggil attribut dari class Pasien
                $dataPasien = [$pasien1, $pasien2, $pasien3];
                $nomor = 1;
                $kode = 1;
                foreach ($dataPasien as $pasien) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $pasien->tglperiksa . '</td>';
                echo '<td>P00' . $kode . '</td>';
                echo '<td>' . $pasien->namapasien . '</td>';
                echo '<td>' . $pasien->jk . '</td>';
                echo '<td>' . $pasien->bb . '</td>';
                echo '<td>' . $pasien->tb . '</td>';
                echo '<td>' . $pasien->nilai() . '</td>';
                echo '<td>' . $pasien->status() . '</td>';
                $nomor++;
                $kode++;
                }

                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $tgl_periksa . '</td>';
                echo '<td>P00' . $kode . '</td>';
                echo '<td>' . $nama_pasien . '</td>';
                echo '<td>' . $jk . '</td>';
                echo '<td>' . $bb . '</td>';
                echo '<td>' . $tb . '</td>';
                echo '<td>' . $hasilbmi->nilai() . '</td>';
                echo '<td>' . $hasilbmi->status($status) . '</td>'; 
            ?>
            </tbody>
             </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Hasil Input, kode pasien anda adalah P004 <br>
                Reset untuk kembali ke form semula
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>