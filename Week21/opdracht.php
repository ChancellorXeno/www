<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="opdracht.css">
</head>
<body>
    <div class='container'>
        <?php
    
        include 'menu.php';
        
        date_default_timezone_set('Europe/Netherlands');
        $uren = date("H");
        $minuten = date("i");
        $seconden = date('s');

        
        if ($uren >= "6" && $uren < "12") {
            echo '<div class="morning"><h1>Good Morning<br>The time is ' ,$uren,':',$minuten,':',$seconden,' right now </h1>','</div>';
            $dagdelen = 'morning';
        }
        
        elseif ($uren >= "12" && $uren < "18") {
            echo '<div class="afternoon"><h1>Good Morning<br>The time is ' ,$uren,':',$minuten,':',$seconden,' right now </h1>','</div>';
            $dagdelen = 'afternoon';
            
        }
        
        elseif ($uren >= "18" && $uren < "00") {
            echo '<div class="evening"><h1>Good Morning<br>The time is ' ,$uren,':',$minuten,':',$seconden,' right now </h1>','</div>';
            $dagdelen = 'evening';
        }
        
        elseif ($uren >= "00" && $uren < "6") {
            echo '<div class="night"><h1>Good Morning<br>The time is ' ,$uren,':',$minuten,':',$seconden,' right now </h1>','</div>';
            $dagdelen = 'night';
        }

        ?>
    </div>
</body>

</html>