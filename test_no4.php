<?php
    //Pengerjaan 15 menit
    //Class Hewan
    class Hewan
    {
        public $nama;
        public function __construct($nama)
        {
            $this->nama = $nama;
        }

        public function bersuara()
        {
            return "Aku adalah hewan";
        }
    }

    //Class Kucing
    class Kucing extends Hewan
    {
        public function bersuara()
        {
            return "Meow";
        }
    }

    //KClasselas Anjing
    class Anjing extends Hewan
    {
        public function bersuara()
        {
            return "Woof";
        }
    }

    $kucing = new Kucing("Kucing");
    $anjing = new Anjing("Anjing");

    echo $kucing->nama . " bersuara \"" . $kucing->bersuara() . "\"\n";
    echo $anjing->nama . " bersuara \"" . $anjing->bersuara() . "\"\n";
?>
