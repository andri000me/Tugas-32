<?php

namespace App;

class Game
{
	protected $gbk;
	public $mode;

	public function __construct()
	{
		$this->gbk[] = [
			'action' => 'Gunting',
		];

		$this->gbk[] = [
			'action' => 'Batu',
		];

		$this->gbk[] = [
			'action' => 'Kertas',
		];
	}

	public function pilihMode($mode)
	{
		$this->mode = $mode;

		if (isset($this->mode)) {
			switch (true) {
				case ($this->mode == 1) :
					return $this->mode = 1;
					break;
				case ($this->mode == 2) :
					return $this->mode = 2;
					break;
				default:
					echo "MAAF INPUTAN YANG ANDA MASUKKAN TIDAK SESUAI \n";
					exit();
			}
		}
	}

	public function tampilGame()
	{
		$no = 1;
		foreach ($this->gbk as $val) {
			echo $no++ . ". " . $val['action'] . "\n";
		}
	}
}