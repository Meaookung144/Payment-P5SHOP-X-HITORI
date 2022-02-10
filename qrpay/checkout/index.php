<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300,400,600,700,800%7CPoppins:300,400,500,600,700%7CSegoe+Script:300,400,500,600,700" media="all">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style>
    body {
        font-family: Kanit;
    }
</style>

<body>

    <div class="content_form d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="card border-0 shadow p-3">
                        <div class="card-body">
                            <div class="text-center mb-4">
                            </div>
                            <div class="card-title text-center mb-5 p-2">
                                <style>
                                    .phone-fix {
                                        width: 30%;
                                        height: auto;
                                    }

                                    img.vert-move {
                                        -webkit-animation: mover 1s infinite alternate;
                                        animation: mover 1s infinite alternate;
                                    }

                                    img.vert-move {
                                        -webkit-animation: mover 1s infinite alternate;
                                        animation: mover 1s infinite alternate;
                                    }

                                    @-webkit-keyframes mover {
                                        0% {
                                            transform: translateY(0);
                                        }

                                        100% {
                                            transform: translateY(-10px);
                                        }
                                    }

                                    @keyframes mover {
                                        0% {
                                            transform: translateY(0);
                                        }

                                        100% {
                                            transform: translateY(-10px);
                                        }
                                    }
                                </style>

                                <center><img class="phone-fix vert-move" src="/img/promptpay-update-stats-2018-p01.jpg"></center>

                            </div>
                            <?php

                            $amount = $_GET['amount'];
                            $href = $_GET['href'];
                            $tel = '000000000';

                            if ($amount < 11) {
                                $img = "https://promptpay.io/$tel/";
                            } else {
                                $img = "https://promptpay.io/$tel/$amount";
                            }
                            ?>
                            <center>
                                <img src="<?php echo $img ?>" alt="" width="300px"><br>
                                AMOUNT : <?php echo $amount; ?><br>
                                HREF : <?php echo $href; ?>
                            </center>
                            <div class="row">
                                <hr class="col">
                            </div>
                            <a href="/" class="btn green-btn col-12 p-2">กลับไปหน้าหลัก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</body>

</html>

<?php


?>