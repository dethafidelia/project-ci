<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h1 class="fs-5">Formulir Pendaftaran Anggota DPPH</h1>
        <p class="fs-6">Silahkan isi formulir di bawah ini untuk mendaftar.</p>
        <form action="" method="post" class="border p-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-sm-2 col-form-label font-weight-bold">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required placeholder="Masukkan nama lengkap Anda">
                </div>
            </div>


            <div class="mb-3">
                <label for="bidang" class="form-label">Bidang:</label>
                <select class="form-select" id="bidang" name="bidang">
                    <option selected disabled>Pilih Bidang</option>
                    <?php if (isset($bidang)) : ?>
                        <?php foreach ($bidang as $row) : ?>
                            <option value="<?= $row['nama_bidang']; ?>"><?= $row['nama_bidang']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>


            <div class="form-group row mb-3">
                <label for="timpel" class="col-sm-2 col-form-label font-weight-bold">Tim Pelayanan</label>
                <div class="col-sm-10">
                    <select name="timpel" id="timpel" class="form-control">
                        <option value="">Pilih Tim Pelayanan</option>
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
                <label for="proposal" class="col-sm-2 col-form-label">Upload Proposal</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="proposal">
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('dpph') ?>" class="btn btn-info" role="button" aria-pressed="true" style="float:right">kembali</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            // Fetch bidang options on page load
            $.ajax({
                url: "<?php echo base_url('bidang/getAllBidang'); ?>",
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    // $('#bidang').append($('<option>', {
                    //     value: '',
                    //     text: 'Pilih Bidang'
                    // }));
                    $.each(data, function(key, value) {
                        $('#bidang').append($('<option>', {
                            value: value.id_bidang,
                            text: value.nama_bidang
                        }));
                    });
                }
            });
        });
    </script>
    <!-- <script>console.log(<? //php echo json_encode($bidang);
                                ?>);</script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>