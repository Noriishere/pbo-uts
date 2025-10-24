<?php

class lingkaran{
    public int $r;
    public const PHI = 3.14;
    public int $hasil;
    public function tampil($nama="ban"){
        $this->hasil = lingkaran::PHI * $this->r * $this->r;
        echo "Lingkaran {$nama} ini Hasilnya adalah: {$this->hasil}";
    }
    public static function testing(){
        echo '<br>';
        echo "ini testing Static";
    }
}

$a = new lingkaran();
$a->r = 20;
$a->tampil('Roda');

lingkaran::testing();
?>