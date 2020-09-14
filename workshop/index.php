<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
    <style>
        .content, .relative {
            min-height : 500px;
        }
        
        .rubriqueActive {
            color:white;
            background-color: #aaaaaa;
        }
        button a:hover {
            text-decoration: none;
        }

    </style>
</head>
<body>
<div class="container">
<?php
    require('header.php');
 ?>
  <div class="row">
    <div class="col-sm-8 content">
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
    </div>
    <div class="col-sm-4 relative">
<?php 
    switch ($navig) {
        case 'index':
            require('relative-content.php');
            break;
        
        case 'todo':
            require('relative-todo.php');
            break;
            
            default:
            require('relative-content.php');
            break;
    }
?>
    </div>
<?php
require('footer.php');
?>
</body>
</html>