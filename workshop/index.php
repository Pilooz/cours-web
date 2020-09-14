<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
    <style>
        .content {
            background-color: pink;
        }
        .relative {
            background-color: lightgreen;
        }

        .rubriqueActive {
            color:white;
            background-color: gray;
        }
    </style>

</head>
<body>
<div class="container">
<?php
    require('header.php');
 ?>
  <div class="row">
<?php
    if (isset($_GET['nav'])) {
        $navig = $_GET['nav'];    
    } else {
        $navig = "index";
    }
       
    switch ($navig) {
        case 'index':
            require('content.php');
            break;
        
        case 'todo':
            require('todo.php');
            break;
            
            default:
            require('content.php');
            break;
    }
?>
<?php 
require('relative.php');
?>
<?php
require('footer.php');
?>
</body>
</html>