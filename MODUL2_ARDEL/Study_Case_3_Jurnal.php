<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanggar Tari Bandung - Pilih Kelas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- buat logika php disini -->
    <?php
    if ($_POST) {
        $gender = $_POST["gender"];
        $age = $_POST["age"];
    }

    if (empty($age) || empty($gender)) {
        $error = "tidak memenuhi kriteria kelas";
    } elseif ($age <=0) {
        $error = "usia harus lebih dari 0";
    } else {
        if ($gender == "male") {

            if ($age >=5 && $age <=10) {
                $hasil = "anak-anak";
            } elseif ($age >=11 && $age <=17) {
                $hasil = "kelas remaja";
            } elseif($age >= 18) {
                $hasil = "kelas dewasa";
            } 
        }
        if ($gender == "female") {
            if ($age >=6 && $age <=11) {
                $hasil = "anak-anak";
            } elseif ($age >=12 && $age <=20) {
                $hasil = "kelas remaja";
            } elseif($age >= 21) {
                $hasil = "kelas dewasa";
            }
        }
    }
    ?>

</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sistem Pemilihan Kelas Tari</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Masukkan Usia Anda
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="age" class="form-label">Usia</label>
                                <input type="number" class="form-control" id="age" name="age" >
                            </div>
                            <div class="mb-3">  
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="gender" >
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Cek Kelas</button>
                        </form>
                        <div class="mt-3">
                            <!-- Pesan atau hasil dapat ditampilkan di sini -->
                            <?php
                            if (!empty($hasil)) {
                                echo "<div class='alert alert-success'>Kategori Anda: $hasil</div>";
                            }
                            ?>
                            <?php
                            if (!empty($error)) {
                                echo "<div class='alert alert-danger'>$error</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
