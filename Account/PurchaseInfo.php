<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;

	class PurchaseInfo implements IFormattable
	{
		protected $CS;
		protected $RMR;
		protected $DealerId;
		protected $UserId;
		protected $LastUpdated;
		protected $Source;

		public function __construct($data = null)
		{
			if(!$data) return;

			foreach($data as $key => $val)
			{
				$functionName = "set".$key;

				if(method_exists($this,$functionName))
				{
					$this->{$functionName}($val);
				}
			}
		}

		public function setCS($cs)
		{
			$this->CS = $cs;
		}

		public function setRMR($rmr)
		{
			$this->RMR = $rmr;
		}

		public function setDealerId($dealerId)
		{
			$this->DealerId = $dealerId;
		}

		public function setUserId($userId)
		{
			$this->UserId = $userId;
		}

		public function setLastUpdated($lastUpdated)
		{
			$this->LastUpdated = $lastUpdated;
		}

		public function setSource($source)
		{
			$this->Source = $source;
		}

		public function getFormat(IFormat $purchaseInfo)
		{
			return $purchaseInfo->format(
				[
					"CS" => $this->CS,
					"RMR" => $this->RMR,
					"DealerId" => $this->DealerId,
					"UserId" => $this->UserId,
					"LastUpdated" => $this->LastUpdated,
					"Source" => $this->Source,
				]
			);
		}
	}