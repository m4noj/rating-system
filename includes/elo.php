<?php
class Elo {
	
	const K = 32;		 // Constant K to calculate final ratings
	protected $Ra; 		// current rating for A
	protected $Rb;		// current rating for B
	protected $Sa;		// score (win(1) or loss(0)) for A
	protected $Sb;		// score (win(1) or loss(0)) for B
	protected $fRa;		// final rating for A
	protected $fRb;		// final rating for B
	
	public function new_rating($Ra,$Rb,$Sa,$Sb){
		$this->Sa = $Sa;
		$this->Sb = $Sb;
		$this->Ra = $Ra;
		$this->Rb = $Rb;
	}
	protected function expected_scores(){
		$Ea = 1/(1+pow(10,($this->Rb - $this->Ra)/400));
		$Eb = 1/(1+pow(10,($this->Ra - $this->Rb)/400));
		return [$Ea,$Eb];
	} 
	protected function final_rating(){
		$Es = $this->expected_scores();
		$this->fRa = $this->Ra + self::K * ($this->Sa - $Es[0]);
		$this->fRb = $this->Rb + self::K * ($this->Sb - $Es[1]);
		return [$this->fRa,$this->fRb];
	}
	
	public function get_ratings(){
		return $this->final_rating();
	}
}

