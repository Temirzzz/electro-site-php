<?php
require_once('core/config.php');
require_once('core/functions.php');
$conn = connect();
require_once('template/header.php');



if (isset($_POST['password']) AND $_POST['password'] != '') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $query = mysqli_query($conn, "SELECT id, password FROM admin WHERE email='".$email."'LIMIT 1");
    $row = mysqli_fetch_assoc($query);
    
    if ($row['password'] == md5($_POST['password'])) {
        $hash = genHash (20);
        mysqli_query($conn, "UPDATE admin SET hash='".$hash."' WHERE id=".$row['id']);
        setcookie('id', $row['id'], time()+30*24*60*60);
        setcookie('hash', $hash, time()+30*24*60*60, null, null, null, true);
        header('Location: ./admin.php');
        exit();
    }
    else {
        echo "Юрец введи верные данные :)";
    }
}
?>

<div class="container forms">
    <div class="row">
        <div class="col l-4 offset-l4">
            <form method="POST">
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"  name="email" >
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"  name="password">
                </div>                
                <button class="btn waves-effect waves-light" type="submit" >Войти
                    <i class="material-icons right">send</i>
                    </button>
            </form>
        </div>
    </div>
</div>