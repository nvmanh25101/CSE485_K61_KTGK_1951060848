<?php
require_once 'models/Employee.php';
class EmployeeController {
    
    public function index() {
        $employee = new Employee();
        $employees = $employee->index();

        require_once 'views/employees/index.php';
    }

    public function detail() {
        if (!isset($_GET['id'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location:views/template/error.php");
            exit();
        }
        if (!is_numeric($_GET['id'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location:views/template/error.php");
            exit();
        }
        $ma = $_GET['id'];
        $employeeModel = new Employee();
        $employee = $employeeModel->getEmployeeById($ma);

        require_once 'views/employees/detail.php';
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $ho_ten = $_POST['ho_ten'];
            $chuc_vu = $_POST['chuc_vu'];
            $phong_ban = $_POST['phong_ban'];
            $luong = $_POST['luong'];
            $ngay_vao_lam = $_POST['ngay_vao_lam'];
            
            if (empty($ho_ten) || empty($chuc_vu) || empty($phong_ban) || empty($luong) || empty($ngay_vao_lam)) {
                $_SESSION['error'] = 'Dữ liệu không được để trống';
                header('location:views/template/error.php');
                exit();
            }
            else {
                $employee = new Employee();
                $employeeArr = [
                    'ho_ten' => $ho_ten,
                    'chuc_vu' => $chuc_vu,
                    'phong_ban' => $phong_ban,
                    'luong' => $luong,
                    'ngay_vao_lam' => $ngay_vao_lam
                ];
                $isInsert = $employee->insert($employeeArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                    header("Location:index.php?controller=employee&action=index");
                    exit();
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                    header("Location:index.php?views/template/error.php");
                    exit();
                }
            }
        }

        require_once 'views/employees/add.php';
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location:views/template/error.php");
            exit();
        }
        if (!is_numeric($_GET['id'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location:views/template/error.php");
            exit();
        }
        $ma = $_GET['id'];
        $employeeModel = new Employee();
        $employee = $employeeModel->getEmployeeById($ma);

        if (isset($_POST['submit'])) {
            $ho_ten = $_POST['ho_ten'];
            $chuc_vu = $_POST['chuc_vu'];
            $phong_ban = $_POST['phong_ban'];
            $luong = $_POST['luong'];
            $ngay_vao_lam = $_POST['ngay_vao_lam'];
            
            if (empty($ho_ten) || empty($chuc_vu) || empty($phong_ban) || empty($luong) || empty($ngay_vao_lam)) {
                $_SESSION['error'] = 'Dữ liệu không được để trống';
                header('location:views/template/error.php');
                exit();
            }
            else {
                $employee = new Employee();
                $employeeArr = [
                    'ma' => $ma,
                    'ho_ten' => $ho_ten,
                    'chuc_vu' => $chuc_vu,
                    'phong_ban' => $phong_ban,
                    'luong' => $luong,
                    'ngay_vao_lam' => $ngay_vao_lam
                ];
                $isUpdate = $employee->update($employeeArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Sửa bản ghi $ma thành công";
                    header("Location:index.php?controller=employee&action=index");
                    exit();
                }
                else {
                    $_SESSION['error'] = "Sửa bản ghi $ma thất bại";
                    header("Location:views/template/error.php");
                    exit();
                }
            }
        }
            
        require_once 'views/employees/edit.php';
    }

    public function delete() {
        //url trên trình dueyjet sẽ có dạng
//        ?controller=book&action=delete&id=1
        //bắt id từ trình duyêtj
        $id = $_GET['id'];
        if (!is_numeric($id)) {
            header("Location:views/template/error.php");
            exit();
        }

        $employee = new Employee();
        $isDelete = $employee->delete($id);

        if ($isDelete) {
            $_SESSION['success'] = "Xóa bản ghi #$id thành công";
            header("Location:index.php?controller=employee&action=index");
            exit();
        }
        else {
            //báo lỗi
            $_SESSION['error'] = "Xóa bản ghi #$id thất bại";
            header("Location:views/template/error.php");
            exit();
        }
    }
}