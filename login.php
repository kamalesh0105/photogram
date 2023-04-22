<?php
include "libs/load.php";


?>





<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php load_template("_head");?>
<body>
  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}


.form-signin {
    max-width: 330px;
    padding: 15px;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] { 
   margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;

}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}


</style>
<?php load_template("_header");   ?>
<main>
<?php load_template("_login")?>
</main>

<?php load_template("_footer"); ?>


    <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
