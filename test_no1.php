<?php
    // Pengerjaan 30 menit

    //Array awal
    $array_mobil = ['Volvo', 'BMW', 'Toyota', 'Kijang'];
    
    print("a. ");
    for ($i=0; $i < count($array_mobil); $i++) { 
        if ($i == count($array_mobil) - 1) { 
            print($array_mobil[$i]);
        } else {
            print($array_mobil[$i].", ");
        }
    }
    print("\n");

    //Menukar posisi antara Volvo dan BMW
    print("b. ");
    $temp = $array_mobil[0];
    $array_mobil[0] = $array_mobil[1];
    $array_mobil[1] = $temp;
    for ($i=0; $i < count($array_mobil); $i++) { 
        if ($i == count($array_mobil) - 1) { 
            print($array_mobil[$i]);
        } else {
            print($array_mobil[$i].", ");
        }
    }
    print("\n");

    //Menukar posisi antara BMW dan Toyota
    print("c. ");
    $temp = $array_mobil[0];
    $array_mobil[0] = $array_mobil[2];
    $array_mobil[2] = $temp;
    for ($i=0; $i < count($array_mobil); $i++) { 
        if ($i == count($array_mobil) - 1) { 
            print($array_mobil[$i]);
        } else {
            print($array_mobil[$i].", ");
        }
    }
    print("\n");

    //Menukar posisi dengan maju 1 posisi (posisi akhir ke pertama, posisi pertama ke posisi 2)
    print("d. ");
    $last = array_pop($array_mobil);
    array_unshift($array_mobil, $last);
    for ($i=0; $i < count($array_mobil); $i++) { 
        if ($i == count($array_mobil) - 1) { 
            print($array_mobil[$i]);
        } else {
            print($array_mobil[$i].", ");
        }
    }
    print("\n");

?>