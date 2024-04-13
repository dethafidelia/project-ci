<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqx61gVWgIGe33WN09YO5cWrHMDwWUP45RhlfYXH/ve/mR0paPXDR5+6P" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1 class="fs-5">Formulir Pendaftaran</h1>
        <p class="fs-6">Silahkan isi formulir di bawah ini untuk mendaftar.</p>
        <form action="register/store" method="post" class="border p-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-sm-2 col-form-label font-weight-bold">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required placeholder="Masukkan nama lengkap Anda">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="bidang" class="col-sm-2 col-form-label font-weight-bold">Bidang</label>
                <div class="col-sm-10">
                    <select name="bidang" id="bidang" class="form-control">
                        <option value="">Pilih Nama Bidang Anda</option>
                        <option value="00">Dewan Harian</option>
                        <option value="01">Bidang Liturgi dan Peribadatan</option>
                        <option value="02">Bidang Pewartaan dan Evangelisasi</option>
                        <option value="03">Bidang Pelayanan Kemasyarakatan</option>
                        <option value="04">Bidang Paguyuban dan Persaudaraan</option>
                        <option value="05">Bidang Rumah Tangga</option>
                        <option value="06">Bidang Penelitian dan Pengembangan</option>
                        <option value="07">Koordinator Ketua Lingkungan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="timpel" class="col-sm-2 col-form-label font-weight-bold">Timpel</label>
                <div class="col-sm-10">
                    <select name="timpel" id="timpel" class="form-control">
                        <option value="">Pilih Nama Timpel Anda</option>
                        <option value="00">Dewan Harian</option>
                        <option value="01">Bidang Liturgi dan Peribadatan</option>
                        <option value="02">Bidang Pewartaan dan Evangelisasi</option>
                        <option value="03">Bidang Pelayanan Kemasyarakatan</option>
                        <option value="04">Bidang Paguyuban dan Persaudaraan</option>
                        <option value="05">Bidang Rumah Tangga</option>
                        <option value="06">Bidang Penelitian dan Pengembangan</option>
                        <option value="07">Koordinator Ketua Lingkungan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="username" class="col-sm-2 col-form-label font-weight-bold">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan username Anda">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="password" class="col-sm-2 col-form-label font-weight-bold">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password Anda">
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>