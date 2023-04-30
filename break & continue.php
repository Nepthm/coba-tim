 <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 2) {
            break;
        }
        echo $i;
        echo '<br>';
    }
    $a = 20;
    while ($a > 1) {
        $a--;
        if ($a == 15) {
            break;
        }
        echo $a;
    }
    echo '<br>';


    for ($i = 1; $i <= 8; $i++) {
        if ($i == 6) {
            continue;
        }
        echo $i;
    }
    echo "<br>";
    for ($i = 11; $i <= 20; $i++) {
        if ($i == 14 || $i == 18) {
            continue;
        }
        echo $i;
    }
    ?>