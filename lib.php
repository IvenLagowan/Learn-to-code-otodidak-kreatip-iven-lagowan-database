<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page){
        case 'input' :
            include'view/input_data.php';
            break;
        case 'data' :
            include'view/tampil_data.php';
            break;
    }

}    else{
        
    include 'view/tampil_data.php';
    }



?>