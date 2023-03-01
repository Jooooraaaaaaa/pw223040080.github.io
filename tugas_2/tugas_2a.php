<?php
    $depan = "George";
    $belakang = "Frederik";
    for ($no = 1; $no <= 100; $no++) {
        if ($no % 5 == 0 && $no % 3 == 0) {
            echo $depan . $belakang . '<br>';
        } elseif ($no % 5 == 0) {
            echo $belakang . '<br>';
        } elseif ($no % 3 == 0) {
            echo $depan . '<br>';
        } else {
            echo $no . '<br>';
        }
    }
    echo "$no <br>"
    ?>