<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM PROMONEV</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .bd {
            background-image: url('<?= base_url('bg1.jpg'); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-2 p-3 bg-white text-white text-center">
            <img src="<?= base_url('logo_login.png') ?>" alt="Paroki Logo" style="height: 100px">
        </div>
        <div class="col-sm-10 p-3 bg-white text-center">
            <h1>PAROKI KELUARGA KUDUS BANTENG</h1>
        </div>
    </div>
    <div class="bd">
        <form action="<?= site_url('gereja/check') ?> " method="post">
            <?= csrf_field() ?>
            <div class="container">
                <div class="row justify-content-center align-items-center min-vh-100">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">LOGIN</h5>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr" name="usr" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                                </div>
                                <?php if (session()->getFlashdata('error') != null) : ?>
                                    <div class="alert" role="alert">
                                        <?php echo session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



</body>

</html>