
<?php


require ('helpers.php'); 

if(isset($_GET['controller'])){

    switch ($_GET['controller']) {
        case 'ajax' :
            require 'controllers/ajaxController.php';
            break;

        default :
            require 'controllers/indexController.php';
    }
}
else{ 
    require 'controllers/indexController.php';
}
