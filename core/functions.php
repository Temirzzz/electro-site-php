<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


function connect () {
    // Create connection
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_set_charset($conn, "utf8");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}


function select ($conn) {
    $offset = 0;

    if (isset($_GET['page']) AND trim($_GET['page']) != '') {
        $offset = trim($_GET['page']);
    }

    $sql = "SELECT * FROM articlies ORDER BY id DESC LIMIT 4 OFFSET ".$offset * 4; //обязательный отступ после OFFSET
    $result = mysqli_query($conn, $sql);

    $a = array();

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $a[] = $row;
        }
    }
    return $a;
    var_dump($a);
}

function pagination_count ($conn) {
    $sql = "SELECT * FROM articlies";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($result);
    //var_dump($result);
    return ceil($result/4);
}


function delete_article ($conn,$id) {
    $sql = "DELETE FROM articlies WHERE id= '$id'";
  
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function sendMail ($conn) {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    $name = trim($data['firstInp']);
    $phone = trim($data['secondInp']);
    $text = trim($data['textArea']);


    $recepient = "temir1201@mail.ru";
    $sitename = "ELECTRO-UG";

    $message = "Имя: $name n\Телефон: $phone n\Текст: $text";

    $pagetitle = "Новая заявка с сайта \"$sitename\"";

    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"n\ From: $recepient");
}


function genHash ($length = 5) {
    $symbol = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789";
    $code = "";
    for ($i = 0; $i < $length; $i++) {
        $code .= $symbol[rand(0, strlen($symbol) -1)];
    }
    return $code;
}

function close ($conn) {
    mysqli_close($conn);
}