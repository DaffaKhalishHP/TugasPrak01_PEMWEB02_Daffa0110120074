<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>

<body>
    <div class="bg-primary p-5">
        <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="form_nilai.php" method="get" class="mt-3">

                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="number" name="nim" value="" class="form-control">
                    </div>
                    <label for="">Mata Kuliah</label>
                    <select name="matkul" class="form-select form-control" class="form-control">
                        <option value="">Pilihlah Matkul :</option>
                        <option value="Network">Network</option>
                        <option value="Database">Database</option>
                        <option value="Statistika">Statiska</option>
                        <option value="KK">Keterampilan Komunikasi</option>
                        <option value="UI/UX">UI/UX</option>
                    </select>
                    <div class="form-group">
                        <label for=""> Nilai UTS</label>
                        <input type="number" name="nilai_uts" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">Nilai UAS</label>
                        <input type="number" name="nilai_uas" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Rata2 Nilai Tugas</label>
                        <input type="number" name="nilai_tugas" value="" class="form-control">
                    </div>
                    <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

                </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Result
                    </div>

                    <!-- Awal PHP -->
                    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
                    <?php
                    $name = $_GET['name'];
                    $nim = $_GET['nim'];
                    $matkul = $_GET['matkul'];
                    $uts_value = $_GET['nilai_uts'];
                    $uas_value = $_GET['nilai_uas'];
                    $assignment_value = $_GET['nilai_tugas'];
                    $proses = $_GET['proses'];
                    $rumus_alphabet = $uas_value + $uts_value + $assignment_value;
                    $alphabet = $rumus_alphabet / 3;
                    $name = !empty($_GET['name']) ? $_GET['name'] : '';
                    ?>
                    <!-- Akhir PHP -->

                    <!-- Awal mencetak HASIL -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama Mahasiswa : <?php echo $name ?></li>
                        <li class="list-group-item">NIM : <?php echo $nim ?></li>
                        <li class="list-group-item">Mata Kuliah : <?php echo $matkul ?></li>
                        <li class="list-group-item"> Nilai UTS  : <?php echo $uts_value ?></li>
                        <li class="list-group-item"> Nilai UAS  : <?php echo $uas_value ?></li>
                        <li class="list-group-item">Nilai Tugas  : <?php echo $assignment_value ?></li>
                        <li class="list-group-item">Nilai Total: <?php echo $alphabet ?></li>
                        <li class="list-group-item">Grade :

                            <!-- Awal Rumus PHP Alphabet -->
                            <?php
                            if ($alphabet >= 85) {
                                echo 'A';
                            } elseif ($alphabet >= 70) {
                                echo 'B';
                            } elseif ($alphabet >= 60) {
                                echo 'C';
                            } elseif ($alphabet >= 40) {
                                echo 'D';
                            } else {
                                echo 'E';
                            }
                            ?>
                            <!-- Akhir Rumus PHP Alphabet -->

                        </li>
                        <!-- Akhir mencetak HASIL -->


                    </ul>
                </div>

            </div>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Value
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">A : 85 - 100</li>
                        <li class="list-group-item">B : 70 -84</li>
                        <li class="list-group-item">C: 60-79</li>
                        <li class="list-group-item">D : 40 - 59 </li>
                        <li class="list-group-item">E : Kurang dari 40 </li>


                    </ul>
                </div>

            </div>

        </div>
</body>

</html>