<?php

	namespace WSI\Account;

	use stdClass;

	class CreditRequest extends AbstractEntity
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

		protected function getEntityObj()
		{
			$entityObj = new stdClass();

			$entityObj->CS = $this->CS;
			$entityObj->SSN = $this->SSN;
			$entityObj->FirstName = $this->FirstName;
			$entityObj->LastName = $this->LastName;
			$entityObj->StreetNumber = $this->StreetNumber;
			$entityObj->StreetName = $this->StreetName;
			$entityObj->City = $this->City;
			$entityObj->State = $this->State;
			$entityObj->Zip = $this->Zip;
			$entityObj->DealerId = $this->DealerId;
			$entityObj->UserId = $this->UserId;
			$entityObj->FICO = $this->FICO;
			$entityObj->RequestDate = $this->RequestDate;
			$entityObj->TransactionID = $this->TransactionID;
			$entityObj->Token = $this->Token;
			$entityObj->BureauID = $this->BureauID;

			return $entityObj;
		}
	}