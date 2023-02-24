<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-md navbar-light bg-light m-auto">
        <a class="navbar-brand" href="index.php">Beasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Pilihan Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftar.php">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hasil.php">Hasil</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- form start -->
    <div class="form">
        <h1>Form Beasiswa</h1>
        <form action="form_action.php" method="POST">
            <div class="form-group" id="form-mahasiswa">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="hp">Nomor HP:</label>
                <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor HP">
            </div>
            <div class="form-group">
                <label for="semester">Semester Saat Ini</label>
                <select class="form-control" id="semester" name="semester" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ipk">Input IPK Terakhir:</label>
                <input type="number" value="<?php echo $ipk; ?>" step="0.01" name="ipk" class="form-control" id="ipk"
                    placeholder="Masukkan IPK terakhir" readonly>
            </div>
            <div class="form-group">
                <label for="pilihan-beasiswa">Pilihan Beasiswa:</label>
                <select class="form-control" id="beasiswa" name="beasiswa" <?php echo $disabled; ?> <?php echo $cursor; ?>>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="DBS Foundation Coding Camp">DBS Foundation Coding Camp</option>
                    <option value="DevOps and Back-End Developer Scholarship Program">DevOps and Back-End Developer
                        Scholarship Program
                    </option>
                    <option value="Bangkit Academy 2023">Bangkit Academy 2023</option>
                </select>
            </div>
            <div class="form-group">
                <label for="upload-berkas">Upload Berkas Syarat:</label>
                <input type="file" class="form-control-file" id="berkas" name="berkas" required>
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Daftar</button>
            <br><br>
        </form>
    </div>
    <!-- form end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>