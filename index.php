<?php



interface AA{
	 public function aa();
	 public function bb();
}

interface BB extends AA{
	 public function cc();
	 public function dd();
}
interface ZZ extends AA,BB{
	public function ff();
	public function ss();
	public function gg();
}
abstract class CC{
	abstract public function aa();
	abstract public function bb();
	abstract public function cc();
	abstract public function dd();
	final public function zzz(){
		echo "faafaf";
	}
	final public function ppp(){
		echo "jhshjsdj";
	}
}

class TEST extends CC implements AA,BB,ZZ{
	
	public $aaa;
	public $bbb;
	public $ccc;
	public $ddd;


	public function __construct($aaa, $bbb){
		$this->aaa=$aaa;
		$this->bbb=$bbb;
	}
	
	public function didIT(){
		$this->didIT2();
		$this->aaa=$this->didIT();
	}
	
	public function didIT2(){
		$this->bbb;
		echo "awesome";
	}
	public function aa(){
		echo "aaa1";
	}
	public function bb(){
		echo "bbb1";
	}
	public  function cc(){
		echo "ccc1";
	}
	public function dd(){
		echo "ddd1";
	}
	public function ff(){
		echo "1";
	}
	public function gg(){
		echo "2";
	}
	public function ss(){
		echo "3";
	}
}

$z = new TEST(1,2);
$z->didIT();
$z->zzz();






















?>
