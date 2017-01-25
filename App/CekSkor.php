<?php

namespace App;

class CekSkor
{
	public function __construct($player1, $player2)
	{
		$this->player1 = $player1;
		$this->player2 = $player2;
	}

	public function cekHasil()
	{
		if ($this->player1['pilihan'] == $this->player2['pilihan']) {
			echo "Halisnya Draw \n";
		} elseif ($this->player1['pilihan'] != $this->player2['pilihan']) {
			switch (true) {
				case (($this->player1['pilihan'] == 'Gunting') 
					&& ($this->player2['pilihan'] == 'Kertas')) :
					echo "Hasilnya, " . $this->player1['nama'] . " Menang \n";
					break;
				case (($this->player1['pilihan'] == 'Gunting') 
					&& ($this->player2['pilihan'] == 'Batu')) :
					echo "Hasilnya, " . $this->player2['nama'] . " Menang \n";
					break;
				case (($this->player1['pilihan'] == 'Batu') 
					&& ($this->player2['pilihan'] == 'Kertas')) :
					echo "Hasilnya, " . $this->player2['nama'] . " Menang \n";
					break;
				case (($this->player1['pilihan'] == 'Batu') 
					&& ($this->player2['pilihan'] == 'Gunting')) :
					echo "Hasilnya, " . $this->player1['nama'] . " Menang \n";
					break;
				case (($this->player1['pilihan'] == 'Kertas') 
					&& ($this->player2['pilihan'] == 'Gunting')) :
					echo "Hasilnya, " . $this->player2['nama'] . " Menang \n";
					break;
				case (($this->player1['pilihan'] == 'Kertas') 
					&& ($this->player2['pilihan'] == 'Batu')) :
					echo "Hasilnya, " . $this->player1['nama'] . " Menang \n";
					break;
			}
		}
	}
}


?>