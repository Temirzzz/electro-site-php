
<?php
require_once('template/header.php');
$data = select ($conn);
$countPage = pagination_count ($conn);
close ($conn);
?>


<div class="chieps-field"></div>

<div class="row">
    <div class="col s12 m10 offset-m1 l6 offset-l3">
        <h2 class="center-align body-h2">Наши работы</h2>
        <?php
            $out = '';
                for ($i = 0; $i < count($data); $i++){
                    $out .= "<div class='col s10 offset-s1 offset-m1 m10 l6 '>";  
                    $out .= "<div class='card medium'>";   
                    $out .= "<div class='card-image waves-effect waves-block waves-light'>";    
                    $out .= "<img src='./image/{$data[$i]['image']}' class='activator responsive-img' alt=''>";   
                    $out .= "</div>";
                    $out .= "<div class='card-content'>";      
                    $out .= "<span class='card-title activator grey-text text-darken-4'>{$data[$i]['title']}<i class='material-icons right'>more_vert</i></span>";
                    $out .= "</div>";
                    $out .= "<div class='card-reveal'>"; 
                    $out .= "<span class='card-title grey-text text-darken-4'>Card Title<i class='material-icons right'>close</i></span>";   
                    $out .= "<p>{$data[$i]['article']}</p>";
                    $out .= "</div>";
                    $out .= "</div>";
                    $out .= "</div>";                                      
                }
            echo $out;
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m 10 l12">
            <ul class="pagination center-align">
                <li class='disabled'><a href='#'></a><i class='material-icons'>chevron_left</i></li>
                    <?php
                        for ($i = 0; $i < $countPage; $i++) {
                            $j = $i + 1;
                            echo "<li class='waves-effect'><a class='page-link' href='./portfolio.php?page={$i}'>{$j}</a></li>";                            
                        }
                    ?>
                <li class='disabled'><a href='#'></a><i class='material-icons'>chevron_right</i></li>
            </ul>           
        </div>
    </div>
</div>

<?php
require_once('send-form.php')
?>

<?php
include_once('template/footer.php')
?>