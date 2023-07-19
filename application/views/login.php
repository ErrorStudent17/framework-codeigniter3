<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login | 202202138</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/custom-login.css') ?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="form-control">
                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="<?php echo base_url('assets/img/poltekcmi.png')?>" id="icon" alt="img" />
                </div>
                <!-- Login Form -->
                <form method="post" action="<?php echo site_url('Auth/login') ?>" class="py-2">
                    <input type="text" id="username" class="fadeIn second" name="username" placeholder="Masukkan Username" required>
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="Masukkan Password" required>
                    <input type="submit" class="fadeIn fourth" value="Masuk">
                </form>
            </div>
        </div>
    </div>
</body>

</html>