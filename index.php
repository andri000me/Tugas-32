<?php

require __DIR__ . "/vendor/autoload.php";

use App\Player;
use App\CekSkor;
use App\Game;

echo  "--------------------------------------- \n"
	. "GAME SEDERHANA, GUNTING | BATU | KERTAS \n"
	. "--------------------------------------- \n"
	. "     SILAHKAN PILIH MODE PERMAINAN \n"
	. "--------------------------------------- \n";
echo  "   1. SINGLE PLAYER  2. MULTIPLAYER \n"
	. "--------------------------------------- \n";

$game = new Game;
echo "Pilih Mode : ";
$mode = fopen("php://stdin", "r");
$mode = fgets($mode);
$game->pilihMode(trim($mode));

if ($game->pilihMode(trim($mode)) == 1) {
	//Player 1
	$p1 = new Player;
	$p1->garis();
	echo "PLAYER 1 : ";
	$nama = fopen("php://stdin", "r");
	$nama = fgets($nama);
	$p1->garis();
	$p1->setPlayer(trim($nama));
	$p1->setGame();
	$p1->tampilGame();
	$p1->garis();
	echo "Pilih Angka : ";
	$pilih = fopen("php://stdin", "r");
	$pilih = fgets($pilih);
	$p1->setPilihan(trim($pilih));
	$p1->tampilPilihan();

	//Player CPU
	$cpu = new Player;
	$cpu->setPlayer('CPU');
	$cpu->setGame();
	$cpu->playerCpu();
	$cpu->tampilPilihan();
	$cpu->garis();

	$hasil = new cekSkor($p1->tampilPilihan(), $cpu->tampilPilihan());
	$hasil->cekHasil();
} else {
	//Player 1
	$p1 = new Player;
	$p1->garis();
	echo "PLAYER 1 : ";
	$nama = fopen("php://stdin", "r");
	$nama = fgets($nama);
	$p1->garis();
	$p1->setPlayer(trim($nama));
	$p1->setGame();
	$p1->tampilGame();
	$p1->garis();
	echo "Pilih Angka : ";
	$pilih = fopen("php://stdin", "r");
	$pilih = fgets($pilih);
	$p1->setPilihan(trim($pilih));
	$p1->tampilPilihan();

	//Player 2
	$p2 = new Player;
	$p2->garis();
	echo "PLAYER 2 : ";
	$nama = fopen("php://stdin", "r");
	$nama = fgets($nama);
	$p2->garis();
	$p2->setPlayer(trim($nama));
	$p2->setGame();
	$p2->tampilGame();
	$p2->garis();
	echo "Pilih Angka : ";
	$pilih = fopen("php://stdin", "r");
	$pilih = fgets($pilih);
	$p2->setPilihan(trim($pilih));
	$p2->tampilPilihan();
	$p2->garis();

	$hasil = new cekSkor($p1->tampilPilihan(), $p2->tampilPilihan());
	$hasil->cekHasil();
}
