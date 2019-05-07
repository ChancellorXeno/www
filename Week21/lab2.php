<link rel="stylesheet" href="opdracht.css">
<?php
    include 'menu.php';
    /* 1 */
    echo "<h1>Hello World!</h1>";
    
    /* 2 */
    $txt = "<h1>Hello World!</h1>";
    echo $txt;
    
    /* 3 */
    $txt = "<h1>Learning PHP</h1>";
    $txt = "<h1>Hello World!</h1>";
    echo $txt;
    
    /* 4 */
    $hello = "<h1>Hello ";
    $world = "World!</h1>";
    echo $hello,$world;
    
    /* 5 */
    $txt = array("<h1>Hello", "World!</h1>");
    echo implode(" ",$txt);
?>