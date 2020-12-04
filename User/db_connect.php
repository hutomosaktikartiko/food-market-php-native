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

    function register($name, $email,  $password, $address, $phone_number, $image)
    {
        //Upload image
        $image = $this->upload();
        if (!$image) {
            return false;
        }


        $insert = mysqli_query($this->koneksi, "insert into tb_users values ('','$name', '$email','$password', 'USER', '$address', '$phone_number', '$image')");
        return $insert;
    }

    function login($email, $password, $remember)
    {
        $query = mysqli_query($this->koneksi, "select * from tb_users where email='$email' AND roles = 'USER'");
        $data_user = $query->fetch_array();

        if (password_verify($password, $data_user['password'])) {

            if ($remember) {
                setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
                setcookie('name', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
                setcookie('image', $data_user['image'], time() + (60 * 60 * 24 * 5), '/');
            }
            
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $data_user['name'];
            $_SESSION['image'] = $data_user['picture_path'];
            $_SESSION['user_login'] = TRUE;
            
            return TRUE;
        }
    }

    function relogin($email)
    {
        $query = mysqli_query($this->koneksi, "select * from tb_users where email='$email'");
        $data_user = $query->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $data_user['name'];
        $_SESSION['image'] = $data_user['picture_path'];
        $_SESSION['user-login'] = TRUE;
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

    function getUserById($userId)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_users WHERE id = $userId");
        return $query;
    }

    function updateFood($id, $categoryId, $name, $description, $price, $total, $image, $lastImage)
    {
        if ($image['error'] === 4) {
            $image = $lastImage;
        } else {
            $image = $this->upload();
        }
        $query = mysqli_query($this->koneksi, "UPDATE tb_food SET category_id = '$categoryId', name_food = '$name', description = '$description', price = '$price', total = '$total', picture_path = '$image' WHERE id_food = $id");
        return $query;
    }

    function updateUser($id, $name, $email, $address, $phone_number, $image, $lastImage)
    {
        if ($image['error'] === 4) {
            $image = $lastImage;
        } else {
            $image = $this->upload();
        }
        $query = mysqli_query($this->koneksi, "UPDATE tb_users SET name = '$name', email = '$email', address = '$address', phone_number = '$phone_number', picture_path = '$image' WHERE id = $id");
        return $query;
    }

    function getFoodCategory()
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_food_category");
        return $query;
    }

    function getFoodCategoryById($id)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_food_category WHERE id_food_category = $id");
        return $query;
    }

    function deleteCategory($categoryId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_food_category WHERE id_food_category=$categoryId");
        return $query;
    }

    function addCategory($category)
    {
        $query = mysqli_query($this->koneksi, "INSERT INTO tb_food_category (id_food_category, name_category) VALUES ('', '$category')");
        return $query;
    }

    function updateCategory($categoryId, $category)
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
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_users WHERE roles = 'USER'");
        return $query;
    }

    function getPayment()
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_payment");
        return $query;
    }

    function deletePayment($paymentId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_payment WHERE id_payment=$paymentId");
        return $query;
    }

    function getPaymentById($paymentId)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tb_payment WHERE id_payment = $paymentId");
        return $query;
    }

    function updatePayment($id, $payment, $account_number, $account_name)
    {
        $query = mysqli_query($this->koneksi, "UPDATE tb_payment SET payment = '$payment', account_number = '$account_number', account_name = '$account_name' WHERE id_payment = $id");
        return $query;
    }

    function addPayment($payment, $account_number, $account_name)
    {
        $query = mysqli_query($this->koneksi, "INSERT INTO tb_payment VALUES ('', '$payment', '$account_number', '$account_name')");
        return $query;
    }

    function deleteTransaction($transactionId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_transactions WHERE id_transaction=$transactionId");
        return $query;
    }

    function deleteUser($userId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_users WHERE id=$userId");
        return $query;
    }

    function deleteFood($foodId)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tb_food WHERE id_food=$foodId");
        return $query;
    }

    function addFood($categoryId, $name, $description, $price, $total, $image)
    {
        $image = $this->upload();
        if (!$image) {
            return false;
        }
        $query = mysqli_query($this->koneksi, "INSERT INTO tb_food VALUES ('', '$categoryId', '$name', '$description', '$price', '$total', '$image')");
        return $query;
    }

    function upload()
    {
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileTmpName = $_FILES['image']['tmp_name'];

        //Tidak ada gambar
        if ($fileError === 4) {
            echo "<script>
                alert('Pilih gambar terlebih dahulu');
                </script>";

            return false;
        }

        //cek file upload
        $extensionImageValid = ['jpg', 'jpeg', 'png'];
        $extensionImage = explode('.', $fileName);
        $extensionImage = strtolower(end($extensionImage));
        if (!in_array($extensionImage, $extensionImageValid)) {
            echo "<script>
                alert('yang anda upload bukan gambar');
                </script>";

            return false;
        }

        //file size
        if ($fileSize > 1000000) {
            echo "<script>
                alert('Ukuran gambar terlalu besar');
                </script>";

            return false;
        }

        //File New Name
        $fileNameNew = uniqid();
        $fileNameNew .= ".";
        $fileNameNew .= $extensionImage;


        //Upload Image
        move_uploaded_file($fileTmpName, 'assets/images/database/' . $fileNameNew);

        return $fileNameNew;
    }
}
