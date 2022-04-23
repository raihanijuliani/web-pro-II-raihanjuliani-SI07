<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>
<div class="content-wrapper">
 <div class="bg-primary"><br>
        <h1 class="text-center text-white">Form Siswa</h1>
        <br>
    </div>
        <div class="m-5 border border-primary p-4 rounded">
            <form method="GET" autocomplete="off" action="form_siswa.php">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label" >Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div> 
                        <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="">Pilih Matkul</option>
                        <option value="basis_data">Basis Data</option>
                        <option value="php">PHP</option>
                        <option value="ddp">DDP</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="m-5 border border-primary p-4 rounded">
                <!-- Cetak php -->
                <?php
                    if(isset($_GET['submit'])){
                        $nama = $_GET['nama'];
                        $matkul = $_GET['matkul'];
                        $nilai_uts = $_GET['nilai_uts'];
                        $nilai_uas = $_GET['nilai_uas'];
                        $nilai_tugas = $_GET['nilai_tugas'];
                        $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

                        // if($matkul == 'basis_data'){
                        //     $nama_matkul = 'Basis Data';
                        // }elseif($matkul == 'php'){
                        //     $nama_matkul = 'PHP';
                        // }elseif($matkul == 'ddp'){
                        //     $nama_matkul = 'DDP';
                        // }
                          
                        switch($matkul){
                            case "basis_data": $nama_matkul = "Basis Data"; break;
                            case "php": $nama_matkul = "PHP"; break;
                            case "ddp": $nama_matkul = "Dasar Dasar Pemerograman"; break;
                            default: "";
                        }

                    }?>
                
                <?php if(isset($_GET['submit'])){?>
                    <p>Nama Lengkap : <?= $nama?> </p>
                    <p>Mata Kuliah : <?= $nama_matkul?></p> 
                    <p>Nilai UTS : <?= $nilai_uts?></p> 
                    <p>Nilai UAS : <?= $nilai_uas?></p>
                    <p>Nilai Tugas/Praktikum : <?= $nilai_tugas?></p> 
                    <p>Nilai Akhir : <?= $nilai_akhir?></p> 
                <?php }else{
                    echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai , Grade dan Predikat </div>';
                } ?>
                
        </div>
        <br>
</div>
<?php
  include_once 'footer.php';
?>