<?php
/*
* This work is adapted from Javascript to PHP based on
	project creator: 	Simply Explained - Savjee
	project name:		Creating a blockchian with Javascript (Blockchain, part 1)
	project URL:		https://www.youtube.com/watch?v=zVqczFZr124
*/

class Transactions {
	public $pendingTransactions = [];
	protected $fromAddress = "";
	protected $toAddress = "";
	protected $amount = 0;

	public function __construct ($fromAddress, $toAddress, $amount) {
		/*
		$this->fromAddress = $fromAddress;
		$this->toAddress = $toAddress;
		$this->amount = $amount;
		*/

		$this->addTransaction($fromAddress, $toAddress, $amount);
	}

	public function __toString() {
	return $this->fromAddress . ", " . 
	       $this->toAddress . ", " . 
	       $this->amount;
	}


	public function addTransaction($fromAddress, $toAddress, $amount) {
		$this->pendingTransactions[] = array($fromAddress, $toAddress, $amount);
	}

	public function clearTransactions() {
		$pendingTransactions = [];
	}	
}


class Block {

	protected $timestamp;
	public $transaction;
	public $miningReward;
	public $miningRewardAddress;
	public $previousHash;
	public $hash;


	public function __construct($timestamp, $transaction, $miner, $miningReward, $previousHash = '') {

		$this->timestamp = $timestamp;
		$this->transaction = $transaction;
		$this->miningRewardAddress = $miner;
		$this->miningReward = $miningReward;
		$this->previousHash = $previousHash;
		$this->nonce = 0;
		$this->hash = $this->calculateHash();
	}


	public function calculateHash() {
		return hash("sha256", "'" 
				. $this->previousHash 
				. $this->timestamp 
				. $this->nonce 
				. implode("~",$this->transaction) 
				. "'") ;
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

		echo "Block mined: " . $this->hash . "<br>";

	}


	public function __toString() {
		return $this->timestamp .", ". implode("~", $this->transaction) .", ". $this->previousHash .", ". $this->hash .", ". $this->nonce . "<br>";
	}
}


class Blockchain {

	public function __construct() {
		$this->chain = [$this->createGenesisBlock()];
		$this->difficulty = 4;
	}


	protected function createGenesisBlock() {
		return new Block("05/27/2018", 
			["amount"=>"0","uid"=>"EMG: Genesis Block"],
			"admin",
			"0", 
			"0"
		);
	}


	protected function getLatestBlock() {
		return sizeof($this->chain) - 1;
	}


	protected function addBlock($newBlock) {
		$newBlock->previousHash = $this->chain[$this->getLatestBlock()]->hash;
		$newBlock->mineBlock($this->difficulty);
		$this->chain[] = $newBlock;

	}


	protected function createTransaction($transaction){
		$this->pendingTransactions[] = $transaction;
	}


	public function minePendingTransactions($tList,$miner,$miningAward) {

		foreach ($tList->pendingTransactions as $innerArray) {
			if (is_array($innerArray)) {
				//echo $innerArray[0] 
				//." ||| ". $innerArray[1] 
				//." ||| ". $innerArray[2] 
				//."<br>";

				$this->transaction = array(
										$innerArray[0], 
										$innerArray[1], 
										$innerArray[2]
									);

				
				$block = new Block(
								date(DATE_ATOM), 
								$this->transaction,
								$miner,
								$miningAward, 
								$this->chain[$this->getLatestBlock()]->hash 
							);
				$this->addBlock($block);

				//echo "<br>Block successfully mined! <br>";
				
			}
		}

		Transactions::clearTransactions();
	}


	public function getBalanceOfAddress($address){
		$balance = 0;

		foreach ($this->chain as $transactionArr) {
			if (is_object($transactionArr)) {

				if (array_key_exists(0, $transactionArr->transaction)) { // $transactionArr->transaction[0] != ""
				
					//echo "<br>" . $transactionArr->transaction[0] ." ||| ". $transactionArr->transaction[1] ." ||| ". $transactionArr->transaction[2] ."<br>";

					if (array_key_exists(0, $transactionArr->transaction)) {
						if ($transactionArr->transaction[0] === $address) { //fromAddress
							$balance -= $transactionArr->transaction[2]; // transaction amount
							//echo "<br> From Address: $address ==>" . $transactionArr->transaction[0] ." || ". $transactionArr->transaction[1] ." || ". $transactionArr->transaction[2] . "<br>";
						}
					}

					if (array_key_exists(0, $transactionArr->transaction)) {
						if ($transactionArr->transaction[1] === $address) { //fromAddress
							$balance += $transactionArr->transaction[2]; // transaction amount
							//echo "<br> To Address: $address ==>" . $transactionArr->transaction[0] ." || ". $transactionArr->transaction[1] ." || ". $transactionArr->transaction[2] . "<br>";
						}
					}
				}
			}				
		
		}

		$stmt = "<p>Balance of " . $address . " is: " . $balance . "</p>";

		return $stmt;
	}


	public function getMinerRewardTotal($miner) {
		$balance = 0;

		foreach ($this->chain as $currentBlock) {
			if ($currentBlock->miningRewardAddress === $miner) {
				$balance += $currentBlock->miningReward;
			}
		}

		return $balance;
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


	public function illNonceChange($index,$num) {
		$this->chain[$index]->nonce = $num;
		$stmt = "<br>Unauthorized change of NONCE for record " . $index;
	
		return $stmt;
	}


}


$learnBlockchain = new Blockchain();

print_r($learnBlockchain);

$tList = new Transactions('Addr-0', 'Addr-1', 100);
$tList->addTransaction('Addr-0', 'Addr-2', 25);
$tList->addTransaction('Addr-0', 'Addr-3', 25);
$tList->addTransaction('Addr-1', 'Addr-2', 25);
$tList->addTransaction('Addr-1', 'Addr-3', 25);
$tList->addTransaction('Addr-2', 'Addr-3', 25);

echo "<p>Starting the miner...</p>";


$learnBlockchain->minePendingTransactions($tList,'EMG-miner',0.85);


echo "<p>Balance of miner EMG is: " . $learnBlockchain->getMinerRewardTotal('EMG-miner') . "</p>";


foreach ($learnBlockchain->chain as $key => $value){
	echo "{$key} => {$value} ";
}


echo $learnBlockchain->getBalanceOfAddress('Addr-2');


echo "Is Blockchain valid?: " . $learnBlockchain->isChainValid();


echo $learnBlockchain->illNonceChange(6, 8947);


echo "<p>&nbsp;</p>";

foreach ($learnBlockchain->chain as $key => $value){
	echo "<pre> {$key} => {$value} </pre>";
}


echo "<br>Is Blockchain valid?: " .$learnBlockchain->isChainValid();

?>