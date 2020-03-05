<?php
require_once 'core/config.php';
require_once 'core/functions.php';
$conn = connect();

?>

<?php
if (isset($_POST['title']) AND $_POST['title'] != '') {
    $title = $_POST['title'];
    $article = $_POST['article'];
    $conn = connect();
    

    if ($_FILES['image']['name'] != '') {
        move_uploaded_file($_FILES['image']['tmp_name'], 'image/'.$_FILES['image']['name']);
        $sql = "UPDATE articlies set title = '".$title."', article = '".$article."', image = '".$_FILES['image']['name']."' WHERE id=".$_GET['id'];
    }
    else {
        $sql = "UPDATE articlies set title = '".$title."', article = '".$article."' WHERE id=".$_GET['id'];
    }

    if (mysqli_query($conn, $sql)) {
        header('Location: ./admin.php');
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    close ($conn);
}
?>


<?php
$conn = connect();
$sql = 'SELECT * FROM articlies WHERE id='.$_GET['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<?php
require_once('template/header_admin.php');
?>



<div class="container">
    <div class="row">
        <div class="col l10 offset-l2">
        <h2>Обновить статью id=<?php echo $_GET['id']; ?></h2>
            <form enctype="multipart/form-data" action="" method="POST">
                <div class="input-field col l10">
                    <label for="title">Заголовок</label>
                    <input type="text" class="validate" id="title"  name="title" value="<?php echo $row['title'];?> ">
                </div>
                <div class="input-field col l10">
                    <label for="article">Статья</label>
                    <textarea id="textarea1" class="materialize-textarea" name="article" value="<?php echo $row['article'];?> "></textarea>
                </div>
                <div class="input-field col l10">
                    <img src="./image/<?php echo $row['image'];?>" alt="">
                </div>
                <div class="file-field input-field col l10">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="image" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text"  placeholder="Upload one or more files">
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" >Обновить статью
                    <i class="material-icons right">send</i>
                    </button>
                </div>                     
                
            </form>
            
        </div>
    </div>
</div>