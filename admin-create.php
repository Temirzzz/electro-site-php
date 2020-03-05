<?php
require_once('template/header_admin.php');
?>

<?php
if (isset($_POST['title']) AND $_POST['title'] != '') {
    $title = trim($_POST['title']);
    $article = trim($_POST['article']);

    move_uploaded_file($_FILES['image']['tmp_name'], 'image/'.$_FILES['image']['name']);

    $conn = connect ();

    if ($title !== '' AND  $article !== '') {
        $sql = "INSERT INTO articlies (image, title, article) VALUES ('".$_FILES['image']['name']."', '".$title."', '".$article."')";
    }
    else {
        echo "Заполните все поля!";
    }
    if ( mysqli_query($conn, $sql)) {
        header('Location: ./admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    close ($conn);
}


?>

<div class="container">
    <div class="row">
        <div class="col l8 offset-l2">
        <h2 class="center-align">Создать статью</h2>
            <form enctype="multipart/form-data" action="" method="POST">
                <div class="input-field col s8 offset-l2">
                    <label for="title">Заголовок</label>
                    <input type="text" class="validate" id="title"  name="title" >
                </div>
                <div class="input-field col s8 offset-l2">
                    <label for="article">Статья</label>
                    <textarea id="textarea1" class="materialize-textarea" name="article"></textarea>
                </div>
                <div class="file-field input-field col s8 offset-l2">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="image" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text"  placeholder="Upload one or more files">
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Добавить
                    <i class="material-icons right">send</i>
                    </button>
                </div>                     
               
            </form>
            
        </div>
    </div>
</div>