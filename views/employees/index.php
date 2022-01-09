
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
        <h3>Danh sách nhân viên</h3>
        <div class="row">
            <a class="btn btn-primary col-1" href="index.php?controller=employee&action=add">
                Thêm
            </a>
            <?php
            require_once 'views/template/message.php';
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Phòng ban</th>
                        <th scope="col">Lương</th>
                        <th scope="col">Ngày vào làm</th>
                        <th scope="col">Chi tiết</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($employees)) : ?>
                        <?php foreach ($employees as $employee) : ?>
                            <tr>
                                <td><?= $employee['ma'] ?></td>
                                <td><?= $employee['ho_ten'] ?></td>
                                <td><?= $employee['chuc_vu'] ?></td>
                                <td><?= $employee['phong_ban'] ?></td>
                                <td><?= $employee['luong'] ?></td>
                                <td><?= $employee['ngay_vao_lam'] ?></td>
                                <td>
                                    <a href="index.php?controller=employee&action=detail&id=<?= $employee['ma'] ?>">Chi tiết</a>
                                <td>
                                <td>
                                    <a href="index.php?controller=employee&action=edit&id=<?= $employee['ma'] ?>">Sửa</a>
                                <td>
                                <td>
                                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="index.php?controller=employee&action=delete&id=<?= $employee['ma'] ?>">Xóa</a>
                                <td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="8">KHông có dữ liệu</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>