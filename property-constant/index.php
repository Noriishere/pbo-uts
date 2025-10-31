<?php
require_once('LuasLingkaran.php');

use App\math\lingkaran as lingkaran;

$a = new lingkaran('ban', 30);
// $a->r = 20;
$a->tampil();

lingkaran::testing();