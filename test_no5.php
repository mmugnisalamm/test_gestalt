<?php
    $data = array(
        array(9, 5, 2),
        array(1, 3, 8),
        array(10, 15, 12),
        array(4, 7, 6),
        array(13, 11, 14),
    );

    // Mengurutkan array berdasarkan nilai dari setiap elemennya
    foreach ($data as &$subArray) {
        sort($subArray);
    }
    unset($subArray);

    // Menghitung jumlah elemen dalam array yang memiliki nilai ganjil
    $jumlahGanjil = 0;
    foreach ($data as $subArray) {
        foreach ($subArray as $value) {
            if ($value % 2 != 0) {
                $jumlahGanjil++;
            }
        }
    }

    // Mencari elemen array dengan nilai terbesar
    $nilaiTerbesar = PHP_INT_MIN;
    foreach ($data as $subArray) {
        foreach ($subArray as $value) {
            if ($value > $nilaiTerbesar) {
                $nilaiTerbesar = $value;
            }
        }
    }

    echo "Array setelah diurutkan:\n";
    print_r($data);

    echo "Jumlah elemen ganjil: $jumlahGanjil\n";
    echo "Nilai terbesar dalam array: $nilaiTerbesar\n";
?>
