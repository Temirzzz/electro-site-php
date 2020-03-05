<?php
require_once('template/header.php');
?>

<div class="chieps-field"></div>

<div class="container">
    <div class="row">  
        <div class="col m10 offset-m1 s12">           
            <form class="mob-form center-align">         
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <label for="icon_prefix">Как вас зовут?</label>
                    <input type="text" class="validate form__input__first" id="icon_prefix">
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <label for="icon_telephone">Оставьте ваш номер телефона</label>
                    <input type="tel" class="validate form__input__second" id="icon_telephone">
                </div>
                <div class="input-field">            
                    <i class="material-icons prefix">mode_edit</i>
                    <label for="textarea1">Комментарий к заказу</label>
                    <textarea class="materialize-textarea form__textarea" id="textarea1"></textarea>          
                </div>
                <button class="btn waves-effect waves-light form__send__btn">Оставить заявку<i class="material-icons right">send</i></button>
            </form>              
        </div>
    </div>   
</div> 

<?php
include_once('template/footer-mob.php')
?>