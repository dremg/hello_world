object(Blockchain)#1 (4) { 
	["chain"]=> array(1) { 
		[0]=> object(Block)#2 (5) { ["timestamp"]=> string(10) "05/27/2018" ["transaction"]=> array(2) { ["amount"]=> string(1) "0" ["uid"]=> string(18) "EMG: Genesis Block" } ["previousHash"]=> string(1) "0" ["hash"]=> string(64) "9e2838eb493cc112b2d3fd37925953d25cf9fd2ba4bf7e09750f368451f2ff03" ["nonce"]=> int(0) } } 
	["difficulty"]=> int(4) 

	["pendingTransactions"]=> array(2) { 

		[0]=> object(Transaction)#3 (4) { 
			["fromAddress"]=> NULL ["toAddress"]=> NULL ["amount"]=> NULL ["pendingTransactions"]=> object(stdClass)#4 (1) { ["tranaction"]=> object(stdClass)#5 (3) { ["fromAddress"]=> string(9) "address-1" ["toAddress"]=> string(9) "address-2" ["amount"]=> int(100) } } } 

		[1]=> object(Transaction)#6 (4) { 
			["fromAddress"]=> NULL ["toAddress"]=> NULL ["amount"]=> NULL ["pendingTransactions"]=> object(stdClass)#7 (1) { ["tranaction"]=> object(stdClass)#8 (3) { ["fromAddress"]=> string(9) "address-2" ["toAddress"]=> string(9) "address-1" ["amount"]=> int(25) } } } } ["miningReward"]=> int(100) } 
			