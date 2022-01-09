<?php
require_once 'configs/database.php';
class Employee {
    public $ma;
    public $ho_ten;
    public $chuc_vu;
    public $phong_ban;
    public $luong;
    public $ngay_vao_lam;

    public function index() {
        $connection = $this->connectDb();
        //truy vấn
        $querySelect = "SELECT * FROM 1951060848_employees";
        $results = mysqli_query($connection, $querySelect);
        $employees = [];
        if (mysqli_num_rows($results) > 0) {
            $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $employees;
    }

    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO 1951060848_employees(ho_ten, chuc_vu, phong_ban, luong, ngay_vao_lam) 
        VALUES ('{$param['ho_ten']}', '{$param['chuc_vu']}', '{$param['phong_ban']}', '{$param['luong']}', '{$param['ngay_vao_lam']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }

    public function getEmployeeById($ma = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM 1951060848_employees WHERE ma=$ma";
        $results = mysqli_query($connection, $querySelect);
        $employee = [];
        if (mysqli_num_rows($results) > 0) {
            $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $employee = $employees[0];
        }
        $this->closeDb($connection);

        return $employee;
    }

    

    public function update($employee = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE 1951060848_employees
        SET ho_ten = '{$employee['ho_ten']}',
        chuc_vu = '{$employee['chuc_vu']}',
        phong_ban = '{$employee['phong_ban']}',
        luong = '{$employee['luong']}',
        ngay_vao_lam = '{$employee['ngay_vao_lam']}'
        WHERE ma = {$employee['ma']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);
        return $isUpdate;
    }

    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM 1951060848_employees WHERE ma = $id";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
            mysqli_set_charset($connection, 'utf8');
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}