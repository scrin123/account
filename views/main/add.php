<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 23.01.2019
 * Time: 23:02
 */
?>
<div>

    <form class="needs-validation" novalidate>
        <div class="form-group">
            <label for="exampleInputEmail1">Имя пака</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Имя пака">
<!--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="row">
            <div class="col">
                <label for="exampleInputPassword1">Цена пака Грана</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Цена">
                <small id="emailHelp" class="form-text text-muted">Указать цены для города на artisan2</small>
            </div>
            <div class="col">
                <label for="exampleInputPassword1">Цена пака Олд виндом</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Цена">
                <small id="emailHelp" class="form-text text-muted">Указать цены для города на artisan2</small>
            </div>
            <div class="col">
                <label for="exampleInputPassword1">Цена пака Трент</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Цена">
                <small id="emailHelp" class="form-text text-muted">Указать цены для города на artisan2</small>
            </div>
            <div class="col">
                <label for="exampleInputPassword1">Цена пака Эферия</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Цена">
                <small id="emailHelp" class="form-text text-muted">Указать цены для города на artisan2</small>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputPassword1">Цена пака Кальф</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Цена">
                    <small id="emailHelp" class="form-text text-muted">Указать цены для города на artisan2</small>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
