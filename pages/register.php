<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="register-container">
        <h3>
            <b>Form Đăng Ký</b>
        </h3>
        <form method="POST" action="http://localhost/Lab3-PHP/pages/registerResult.php">
            <div class="form-group col-12">
                <label for="">Tên:</label>
                <input class="form-control" type="text" name="name" value="" />
            </div>
            <div class="form-group col-12">
                <label for="">Địa chỉ:</label>
                <input class="form-control" type="text" name="address" value="" />
            </div>
            <div class="form-group col-12">
                <label for="">Nghề:</label>
                <input class="form-control" type="text" name="job" value="" />
            </div>
            <div class="form-group col-12">
                <label for="">Ghi chú:</label>
                <input class="form-control" type="text" name="note" value="" />
            </div>
            <div class="form-group mt-3 col-3">
                <button class="btn btn-danger btn-delete" type="button" name="btn-delete">Xóa</button>
                <input class="btn btn-primary" type="submit" value="Đăng ký" name="btn-submit" />
            </div>
        </form>
    </div>
</body>

<script>
var inputArr = document.querySelectorAll("input[type=text]");
var btnDelete = document.querySelector(".btn-delete")
btnDelete.onclick = () => {
    console.log(inputArr);
    for (var i = 0; i < inputArr.length; i++) {
        inputArr[i].value = ""
    }
}
</script>

</html>