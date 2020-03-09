<?php
require_once('template/header_admin.php');
$conn = connect();
?>

<div class="container">
    <div class="row">
        <div class="col l12">
            <?php
                echo '<div class=" center-align"><h1>Панель администратора</h1></div>';
                $out = '<table class="striped">';
                $out .= '<tr><th>Id</th><th>Заголовок</th><th class="center-align">Статья</th><th>Картинка</th><th>Обновить</th><th>Удалить</th></tr>';
                for ($i = 0; $i < count($data); $i++) {
                    $out .= "<tr><td>{$data[$i]['id']}</td><td>{$data[$i]['title']}</td>";
                    $out .= "<td>{$data[$i]['article']}</td><td><img img src='./image/{$data[$i]['image']}' width='120'></td>";
                    $out .= "<td><a href='./update.php?id={$data[$i]['id']}' class='waves-effect waves-light btn'>Update</a></td>";
                    $out .= "<td><button class='waves-effect waves-light btn check-delete' data='{$data[$i]['id']}'>x</button></td></tr>";
                }
                $out .= '</table>';

                echo "$out";
            ?>
        </div>
    </div>
</div>
<script>
    window.onload = () => {
        let checkDelete = document.querySelectorAll('.check-delete');
        checkDelete.forEach((element) => {
            if (document.cookie == false) {
                //console.log('ampty');                
                return false;
            }
            else {
                element.onclick = deleteArt;
            }
        })
        function deleteArt (e) {
            e.preventDefault();
            let intBtn = confirm ('Удалить статью?');
            if (intBtn == true) {
                location.href = './admin-delete.php?id='+this.getAttribute('data');
            }
            else {
                return false;
            }
        }
    }
</script>

<div class="container">
    <div class="row">
        <div class="col s12 m 10 l12">
            <ul class="pagination center-align">
                <li class='disabled'><a href='#'></a><i class='material-icons'>chevron_left</i></li>
                    <?php
                        for ($i = 0; $i < $countPage; $i++) {
                            $j = $i + 1;
                            echo "<li class='waves-effect'><a class='page-link' href='./admin.php?page={$i}'>{$j}</a></li>";                            
                        }
                    ?>
                <li class='disabled'><a href='#'></a><i class='material-icons'>chevron_right</i></li>
            </ul>           
        </div>
    </div>
</div>