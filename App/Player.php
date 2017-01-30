<?php

namespace App;

use App\Game;

class Player extends Game
{
	public $nama;
	private $pilihan;

	public function setPlayer($nama)
	{
		$this->nama = $nama;
	}

	public function getPlayer()
	{
		return $this->nama;
	}

	public function setPilihan($pilih)
	{
		$this->pilih = $pilih;

		if (isset($this->pilih)) {
			switch (true) {
				case ($this->pilih == 1) :
					return $this->pilih = 'Gunting';
					break;
				case ($this->pilih == 2) :
					return $this->pilih = 'Batu';
					break;
				case ($this->pilih == 3) :
					return $this->pilih = 'Kertas';
					break;
				default:
					echo "MAAF INPUTAN YANG ANDA MASUKKAN TIDAK SESUAI \n";
					exit();
			}
		}
	}

	public function playerCpu($game)
	{
		$this->game = $game;
		foreach ($this->game as $value) {
			return $this->pilih = shuffle($this->game);
		}

		print_r($this->game);

		if (isset($this->pilih)) {
			switch (true) {
				case ($this->pilih == 0) :
					return $this->pilih = 'Gunting';
					break;
				case ($this->pilih == 1) :
					return $this->pilih = "Batu";
					break;
				case ($this->pilih == 2) :
					return $this->pilih = "Kertas";
					break;
			}
		}
	}

	public function getPilihan()
	{
		$this->pilihan = [
			'nama'		=>	$this->getPlayer(),
			'pilihan'	=>	$this->pilih,
		];

		return $this->pilihan;
	}

	public function garis()
	{
		echo str_repeat("-", 39) . "\n";
	}
}

?>