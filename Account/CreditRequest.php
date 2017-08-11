<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;

	class CreditRequest implements IFormattable
	{
		protected $CS;
		protected $SSN;
		protected $FirstName;
		protected $LastName;
		protected $StreetNumber;
		protected $StreetName;
		protected $City;
		protected $State;
		protected $Zip;
		protected $DealerId;
		protected $UserId;
		protected $FICO;
		protected $RequestDate;
		protected $TransactionID;
		protected $Token;
		protected $BureauID;

		public function __construct($data = null)
		{
			if(!$data) return;

			foreach($this->data = $data as $key => $val)
			{
				$functionName = "set".$key;

				if(method_exists($this,$functionName))
				{
					$this->{$functionName}($val);
				}
			}
		}

		public function setCS($CS)
		{
			$this->CS = $CS;
		}

		public function setSSN($SSN)
		{
			$this->SSN = $SSN;
		}

		public function setFirstName($FirstName)
		{
			$this->FirstName = $FirstName;
		}

		public function setLastName($LastName)
		{
			$this->LastName = $LastName;
		}

		public function setStreetNumber($StreetNumber)
		{
			$this->StreetNumber = $StreetNumber;
		}

		public function setStreetName($StreetName)
		{
			$this->StreetName = $StreetName;
		}

		public function setCity($City)
		{
			$this->City = $City;
		}

		public function setState($State)
		{
			$this->State = $State;
		}

		public function setZip($Zip)
		{
			$this->Zip = $Zip;
		}

		public function setDealerId($DealerId)
		{
			$this->DealerId = $DealerId;
		}

		public function setUserId($UserId)
		{
			$this->UserId = $UserId;
		}

		public function setFICO($FICO)
		{
			$this->FICO = $FICO;
		}

		public function setRequestDate($RequestDate)
		{
			$this->RequestDate = $RequestDate;
		}

		public function setTransactionID($TransactionID)
		{
			$this->TransactionID = $TransactionID;
		}

		public function setToken($Token)
		{
			$this->Token = $Token;
		}

		public function setBureauID($BureauID)
		{
			$this->BureauID = $BureauID;
		}

		public function getFormat(IFormat $creditRequest)
		{
			return $creditRequest->format(
				[
					"CS" => $this->CS,
					"SSN" => $this->SSN,
					"FirstName" => $this->FirstName,
					"LastName" => $this->LastName,
					"StreetNumber" => $this->StreetNumber,
					"StreetName" => $this->StreetName,
					"City" => $this->City,
					"State" => $this->State,
					"Zip" => $this->Zip,
					"DealerId" => $this->DealerId,
					"UserId" => $this->UserId,
					"Fico" => $this->FICO,
					"RequestDate" => $this->RequestDate,
					"TransactionID" => $this->TransactionID,
					"Token" => $this->Token,
					"BureauID" => $this->BureauID,
				]
			);
		}
	}