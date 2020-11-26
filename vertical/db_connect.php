<?php

class Database
{
    var $databaseHost = 'localhost';
    var $databaseName = 'db_food_market';
    var $databaseUsername = 'root';
    var $databasePassword = '';
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);
    }

    function register($name, $email,  $password, $roles, $address, $phone_number)
    {
        $insert = mysqli_query($this->koneksi, "insert into tb_users values ('','$name', '$email','$password', '$roles', '$address', '$phone_number', '')");
        return $insert;
    }

    function login($email, $password, $remember)
    {
        $query = mysqli_query($this->koneksi, "select * from tb_users where email='$email'");
        $data_user = $query->fetch_array();
        if (password_verify($password, $data_user['password'])) {

            if ($remember) {
                setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
                setcookie('name', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $data_user['name'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($email)
    {
        $query = mysqli_query($this->koneksi, "select * from tb_users where username='$email'");
        $data_user = $query->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $data_user['name'];
        $_SESSION['is_login'] = TRUE;
    }

    function getFood()
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_food, tb_food_category WHERE tb_food.category_id = tb_food_category.id_food_category");
        return $query;
    }

    function getFoodById($foodId)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_food WHERE id_food = $foodId");
        return $query;
    }

    function updateFood($id, $categoryId, $name, $description, $price, $total)
    {
        $query = mysqli_query($this->koneksi, "UPDATE tb_food SET category_id = '$categoryId', name_food = '$name', description = '$description', price = '$price', total = '$total' WHERE id_food = $id");
        return $query;
    }

    function getFoodCategory()
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_food_category");
        return $query;
    }

    function deleteCategory($categoryId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_food WHERE id_food_category=$categoryId");
        return $query;
    }

    function addCategory($category)
    {
        $query = mysqli_query($this->koneksi, "INSERT INTO tb_food_category (id_food_category, name_category) VALUES ('', '$category')");
        return $query;
    }

    function editCategory($categoryId, $category)
    {
        $query = mysqli_query($this->koneksi, "UPDATE tb_food_category SET name_category = '$category' WHERE id_food_category = $categoryId");
        return $query;
    }

    function getTransactions()
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_transactions, tb_food, tb_status, tb_payment, tb_users WHERE tb_transactions.food_id = tb_food.id_food AND tb_transactions.payment_id = tb_status.id_status AND tb_transactions.payment_id = tb_payment.id_payment AND tb_transactions.user_id = tb_users.id");
        return $query;
    }

    function getUser()
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_users");
        return $query;
    }

    function deleteTransaction($transactionId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_transactions WHERE id_transaction=$transactionId");
        return $query;
    }

    function deleteFood($foodId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_food WHERE id_food=$foodId");
        return $query;
    }

    function addFood($categoryId, $name, $description, $price, $total)
    {
        $query = mysqli_query($this->koneksi, "INSERT INTO tb_food (id_food, category_id, name_food, description, price, total) VALUES ('', '$categoryId', '$name', '$description', '$price', '$total')");
        return $query;
    }
    
}
