<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Thêm nhân viên</title>
</head>
<body>
    <div class="container mt-3 px-4">
        <h1>Thêm nhân viên</h1>
        <div class="row gx-5">
            <form class="input-group mb-3" action="" method="post">
                <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                <input type="text" class="form-control" name="ho_ten" placeholder="Họ và tên">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Chức vụ</span>
                <input type="text" class="form-control" name="chuc_vu" placeholder="Chức vụ" >
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Phòng ban</span>
                <input type="text" class="form-control" name="phong_ban" placeholder="Phòng ban" >
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Lương</span>
                <input type="text" class="form-control" name="luong" placeholder="Lương" >
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Ngày vào làm</span>
                <input type="date" name="ngay_vao_lam" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
