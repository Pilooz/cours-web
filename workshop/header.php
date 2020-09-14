<?php
    if (isset($_GET['nav'])) {
        $navig = $_GET['nav'];    
    } else {
        $navig = "index";
    }
    
    $activeIndex = ($navig == "index") ? "rubriqueActive" : "";
    if ($navig == "todo") {
        $activeTodo = "rubriqueActive";
    } else {
        $activeTodo = "";
    }
    
?>

<header>
        <a href="#" class="logo">Workshop de Septembre 2020</a>
        <!-- <a href="index.php?nav=index" class="button <?php echo $activeIndex ?>">Index</a>
        <a href="index.php?nav=todo" class="button <?php echo $activeTodo ?>">Todo</a> -->
        <button id="index" class="<?php echo $activeIndex ?>"><a href="?nav=index">Index</a></button>
        <button id="todo" class="<?php echo $activeTodo ?>"><a href="?nav=todo">Todo</a></button>
</header>