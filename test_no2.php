<?php
    //Pengerjaan 10 menit
    for ($i=1; $i <= 10 ; $i++) { 
        print("- ");
        if ($i <= 5) {
            for ($j=1; $j <= $i; $j++) { 
                print("0");
            }
            print($i);
        } else {
            print($i);
            $max_j = ($i == 10) ? $i - 1 : $i;
            for ($j=1; $j <= $max_j; $j++) { 
                print("0");
            }
        }
        print("\n");
    }

?>