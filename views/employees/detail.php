<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nhân viên</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Nhân viên</h3>
        <div class="row">
            <p>Họ tên: <?= $employee['ho_ten'] ?></p>
            <p>Chức vụ: <?= $employee['chuc_vu'] ?></p>
            <p>Phòng ban: <?= $employee['phong_ban'] ?></p>
            <p>Lương: <?= $employee['luong'] ?></p>
            <p>Ngày vào làm: <?= $employee['ngay_vao_lam'] ?></p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>