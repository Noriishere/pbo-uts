<?php

class lingkaran{

    public int $r;
    public const PHI = 3.14;
    public int $hasil;
    public string $nama;
    public function __construct($nama = "Roda", $r=1){
        $this->r = $r;
        $this->nama = $nama;
    }
    public function tampil(){
        $this->hasil = lingkaran::PHI * $this->r * $this->r;
        echo "Lingkaran {$this->nama} ini Hasilnya adalah: {$this->hasil}";
    }
    public static function testing(){
        echo '<br>';
        echo "ini testing Static";
    }
    public function __destruct(){
        echo '<br>';
        echo "Bisa tapi mati ";
    }
}

$a = new lingkaran('ban', 30);
$a->r = 20;
$a->tampil();

lingkaran::testing();
?>