<?php

require __DIR__ . "/vendor/autoload.php";

use App\Player;
use App\CekSkor;
use App\Game;

echo  "--------------------------------------- \n"
	. "GAME SEDERHANA, GUNTING | BATU | KERTAS \n"
	. "--------------------------------------- \n"
	. "     SILAHKAN PILIH MODE PERMAINAN \n"
	. "--------------------------------------- \n"
	. "   1. SINGLE PLAYER  2. MULTIPLAYER \n"
	. "--------------------------------------- \n";

$p1 = new Player;
$p2 = new Player;
$game = new Game;
echo "Pilih Mode : ";
$mode = fopen("php://stdin", "r");
$mode = fgets($mode);
$game->pilihMode(trim($mode));

if ($game->pilihMode(trim($mode)) == 1) {
	//Player 1

	echo "PLAYER 1 : ";
	$nama = fopen("php://stdin", "r");
	$nama = fgets($nama);
	$p1->setPlayer(trim($nama));
	$game->tampilGame();

	echo "Pilih Angka : ";
	$pilih = fopen("php://stdin", "r");
	$pilih = fgets($pilih);
	$p1->setPilihan(trim($pilih));
	$p1->getPilihan();

	//Player CPU
	$cpu = new Player;
	$cpu->setPlayer('CPU');
	$game->tampilGame();
	$cpu->playerCpu($game);
	$cpu->getPilihan();

	$hasil = new cekSkor($p1->getPilihan(), $cpu->getPilihan());
	$hasil->cekHasil();
} else {
	//Player 1
	$p1 = new Player;

	echo "PLAYER 1 : ";
	$nama = fopen("php://stdin", "r");
	$nama = fgets($nama);

	$p1->setPlayer(trim($nama));
	$p1->setGame();
	$p1->tampilGame();

	echo "Pilih Angka : ";
	$pilih = fopen("php://stdin", "r");
	$pilih = fgets($pilih);
	$p1->setPilihan(trim($pilih));
	$p1->tampilPilihan();

	//Player 2
	$p2 = new Player;

	echo "PLAYER 2 : ";
	$nama = fopen("php://stdin", "r");
	$nama = fgets($nama);

	$p2->setPlayer(trim($nama));
	$p2->setGame();
	$p2->tampilGame();

	echo "Pilih Angka : ";
	$pilih = fopen("php://stdin", "r");
	$pilih = fgets($pilih);
	$p2->setPilihan(trim($pilih));
	$p2->tampilPilihan();


	$hasil = new cekSkor($p1->tampilPilihan(), $p2->tampilPilihan());
	$hasil->cekHasil();
}