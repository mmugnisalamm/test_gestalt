<?php
    //Pengerjaan 30 menit
    $string = "Coding merupakan kegiatan yang dimana kamu memberitahukan komputer apa yang harus dia kerjakan untuk kamu. Sebuah kode yang ada pada skrip bisa diibaratkan layaknya bahasa sehari-hari. Setiap kode yang kamu tulis akan membantu komputer untuk mengetahui dan memahami apa yang ingin kamu lakukan pada komputer";

    //Menghitung huruf pada string
    $hanya_huruf = preg_replace('/[^a-zA-Z]/', '', $string);
    $jumlah_huruf = strlen($hanya_huruf);

    //Menghitung jumlah kata pada string
    $word = explode(" ", $string);

    //Menghitung jumlah huruf vokal pada string
    preg_match_all('/[aeiou]/', strtolower($string), $matchesVocal);
    $jumlah_vokal = count($matchesVocal[0]);

    //Menghitung jumlah huruf konsonan pada string
    preg_match_all('/[qwrtypsdfghjklzxcvbnm]/', strtolower($string), $matchesConsonant);
    $jumlah_konsonan = count($matchesConsonant[0]);

    //Mencari kata yang banyak muncul
    $frekuensi = array_count_values($word);
    $kata_terbanyak = array_keys($frekuensi, max($frekuensi));

    print("Jumlah huruf: ".$jumlah_huruf);
    print("\n");
    print("Jumlah kata: ".count($word));
    print("\n");
    print("Jumlah huruf vokal: ".$jumlah_vokal);
    print("\n");
    print("Jumlah huruf konsonan: ".$jumlah_konsonan);
    print("\n");
    print("Kata terbanyak: ". implode(", ", $kata_terbanyak) . " (" . max($frekuensi) . " kali)");
    print("\n");
?>