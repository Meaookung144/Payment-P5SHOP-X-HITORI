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

                                <center><img class="phone-fix vert-move" src="https://media.discordapp.net/attachments/933477084817391616/933672609642594304/gift.png"></center>

                            </div>
                            <?php
                            if (isset($_POST['payment-truewallet'])) {
                                include('class.php');
                                $api = new HitoriAPI();
                                $gift = $_POST['link'];
                                $href = $_POST['href'];
                                $result = $api->truewallet($gift);
                                


                                if ($result['code'] == '200') {     //เมื่อรายการสำเร็จ
                                    $amount =  $result['amount'];
                                    

//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = '';

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================


$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "มีการรับชำระเงินเข้ามาใหม่นะ",

    // Username
    "username" => "",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "มีการชำระเงินเข้ามาใหม่",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => "",

            // URL of title link
            "url" => "",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec("70d9ee"),

            // Footer
            "footer" => [
                "text" => "SYSTEM BY | MEAOOKUNG144",
                "icon_url" => "https://meaookung144.xyz/Meaookung144.png"
            ],

            // Image to send
            // "image" => [
            //     "url" => ""
            // ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                "name" => "",
                "url" => ""
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "METHOD : $method",
                    "value" => "AMOUNT : $amount ฿\nHREF : $href",
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "ช่องทาง : $method",
                    "value" => "จำนวนเงิน : $amount ฿\nเลขอ้างอิง : $href",
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);


$ch = curl_init($webhookurl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close($ch);

                                    echo "คุณได้เติมเงินเป็นจำนวน $amount แล้ว!";
                                    echo "
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'correct',
                title: 'สำเร็จ คุณได้เติมเงินเป็นจำนวน $amount แล้ว!'
              })
            </script>
			";
                                }
                                //การแสดง Error ต่างๆ
                                if ($result['code'] == '400') {

                                    echo "
                    
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'error',
                title: 'โปรดใส่ข้อมูลให้ครบถ้วน'
              })
            </script>
			";
                                }
                                if ($result['code'] == '401') {

                                    echo "
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'error',
                title: 'จำนวนการใช้งานของคุณเต็มแล้ว โปรดติดต่อผู้ดูแล API'
              })
            </script>
			";
                                }
                                if ($result['code'] == '503') {

                                    echo "
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'error',
                title: 'เกิดข้อผิดผลาดกับระบบ โปรดติดต่อผู้ดูแล API'
              })
            </script>
			";
                                }
                                if ($result['code'] == '404') {

                                    echo "
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'error',
                title: 'ไม่พบซองนี้ในระบบหรืออาจถูกใช้ไปก่อนหน้าแล้ว'
              })
            </script>
			";;
                                }
                                if ($result['code'] == '406') {

                                    echo "
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'error',
                title: 'ผู้รับซองต้องเป็น 1 คนเท่านั้น !'
              })
            </script>
			";
                                }
                            }
                            ?>
                            <?php
                            $href = $_GET['href'];
                            ?>
                            <form method="post" action="">
                                <div class="form-group mb-4">
                                    <div class="input-group mb-4">
                                        <span class="input-group-text" id="basic-addon1" style="background:#fff;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                                <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                                            </svg>&nbsp;ซองอั่งเปา
                                        </span>
                                        <input type="text" id="link" name="link" class="form-control" placeholder="https://gift.truemoney.com/campaign/?v=..." style="font-size: small;">
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text" id="basic-addon1" style="background:#fff;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hash" viewBox="0 0 16 16">
                                                <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z" />
                                            </svg>&nbsp;Href.
                                        </span>
                                        <input type="text" id="href" name="href" class="form-control" placeholder="เลขอ้างอิง(ไม่จำเป็นต้องใส่)"   value="<?php echo $href;?>" <?php 
                                        if (empty($href)) {
  
} else{
    echo "disabled";
}
                                        ?> >
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <button name="payment-truewallet" class="btn red-btn col-12 p-2">ยืนยัน</button>
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


