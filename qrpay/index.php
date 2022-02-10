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
                                <?php
                                $amount = 10;
                                $amount = $_GET['amount'];
                                $href = $_GET['href']

                                ?>
                            </div>
                            <form method="get" action="./checkout/">
                                <div class="form-group mb-4">
                                    <div class="input-group mb-4">
                                        <span class="input-group-text" id="basic-addon1" style="background:#fff;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" />
                                            </svg>&nbsp;จำนวนเงิน
                                        </span>
                                        <input type="number" id="amount" name="amount" class="form-control" placeholder="10" required min="0" value="<?php echo $amount; ?> <?php if (empty($amount)) {echo 'value=10';}elseif($amount == 'undefined'){echo 'value=10';} else {} ?>" <?php if (empty($amount)) {}elseif($amount == 'undefined'){} else {echo "disabled";} ?>>
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text" id="basic-addon1" style="background:#fff;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hash" viewBox="0 0 16 16">
                                                <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z" />
                                            </svg>&nbsp;Href.
                                        </span>
                                        <input type="text" id="href" name="href" class="form-control" placeholder="เลขอ้างอิง(ไม่จำเป็นต้องใส่)"  value="<?php echo $href; ?>"<?php if (empty($href)) {} else {echo "disabled";} ?>>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <button name="success" class="btn red-btn col-12 p-2" value="false">ยืนยัน</button>
                                </div>
                            </form>
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