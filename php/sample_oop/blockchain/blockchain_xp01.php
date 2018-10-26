<?php
/*
* This work is adapted from Javascript to PHP based on
	project creator: 	Simply Explained - Sanjee
	project name:		Creating a blockchian with Javascript (Blockchain, part 1)
	project URL:		https://www.youtube.com/watch?v=zVqczFZr124
*/

class Block {

	public $index;
	public $timestamp;
	public $data;
	public $previousHash;
	public $hash;

	public function __construct($index, $timestamp, $data, $previousHash = '') {
		$this->index = $index;
		$this->timestamp = $timestamp;
		$this->data = $data;
		$this->previousHash = $previousHash;
		$this->nonce = 0;
		$this->hash = $this->calculateHash();
	}


	public function calculateHash() {
		return hash("sha256", "'" . $this->index . $this->previousHash . $this->timestamp . implode(" ", $this->data) . $this->nonce . "'") ;
	}


	public function mineBlock($difficulty) {
		$prefix = "";
		for ($i=0; $i < ($difficulty - 1); $i++) {
			$prefix .= "7";
		}

		while (substr($this->hash, 0, $difficulty - 1) != $prefix) {
			$this->nonce++;
			$this->hash = $this->calculateHash();
		}

		echo "<p>Block mined: " . $this->hash . "</p>";

	}


	public function __toString() {
		return "" . $this->index .", ". $this->timestamp .", ". implode("~", $this->data) .", ". $this->previousHash .", ". $this->hash .", ". $this->nonce . "<br>";
	}
}


class Blockchain {

	public function __construct() {
		$this->chain = [$this->createGenesisBlock()];
		$this->difficulty = 6;
	}


	public function createGenesisBlock() {
		return new Block(0,"05/27/2018", ["amount"=>"0","uid"=>"EMG: Genesis Block"], "0");
	}


	public function getLatestBlock() {
		return sizeof($this->chain) - 1;
	}


	public function addBlock($newBlock) {
		$newBlock->previousHash = $this->chain[$this->getLatestBlock()]->hash;
		$newBlock->mineBlock($this->difficulty);
		$this->chain[] = $newBlock;

	}


	public function isChainValid() {
		for($i = 1; $i < sizeof($this->chain); $i++) {
			$currentBlock = $this->chain[$i];
			$previousBlock = $this->chain[$i - 1];

			if($currentBlock->hash != $currentBlock->calculateHash() ) {
				return "false";
			}

			if($currentBlock->previousHash != $previousBlock->hash) {
				return "false";
			}
		}

		return "true";
	}
}


$learnBlockchain = new Blockchain();
$learnBlockchain->addBlock(new Block(1, "05/27/2018", array( "amount"=>"4", "uid"=>'EMG' ) ));
$learnBlockchain->addBlock(new Block(2, "05/29/2018", array( "amount"=>"13", "uid"=>'EMG' ) ));



print_r($learnBlockchain->chain);
echo "<p>&nbsp;</p>";

foreach ($learnBlockchain->chain as $key => $value){
	echo "{$key} => {$value} ";
}



echo "<p>Object size: " . sizeof($learnBlockchain->chain) . "<br>";
echo "Is chain valid: " . $learnBlockchain->isChainValid() . "<br>";

/*
$learnBlockchain->chain[1]->data = ["amount"=>"100","uid"=>"EMG"];
$learnBlockchain->chain[1]->hash = $learnBlockchain->chain[1]->calculateHash();
echo "Is chain valid: " . $learnBlockchain->isChainValid() . "</p>";
*/

foreach ($learnBlockchain->chain as $key => $value){
	echo "{$key} => {$value} ";
}


?>