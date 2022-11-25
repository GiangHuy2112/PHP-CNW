<?php 
    $name = '';
    $address = '';
    $job = "";
    $note ="";
    if(isset($_POST["name"]) && isset($_POST["address"])  && isset($_POST["job"]) && isset($_POST["note"]) ) { 
        $name = $_POST["name"];
        $address = $_POST["address"];
        $job = $_POST["job"];
        $note = $_POST["note"];
     } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/Lab3-PHP/css/center.css">
</head>

<body>
    <?php include './head.php' ;?>
    <div class="content">
        <?php include './left.php' ;?>
        <div class="content-right">
            <div class="register-result-container">
                <h3><b>Kết quả đăng ký</b></h3>
                <div>
                    Tên: <span><?php echo $name?></span>
                </div>
                <div class="mt-3">
                    Địa chỉ: <span><?php echo $address?></span>
                </div>
                <div class="mt-3">
                    Nghề: <span><?php echo $job?></span>
                </div>
                <div class="mt-3">
                    Ghi chú: <span><?php echo $note?></span>
                </div>
            </div>
        </div>
    </div>
    <?php include './footer.php' ;?>

</body>

</html>