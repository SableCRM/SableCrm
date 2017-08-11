<?php

	namespace WSI\Account;

	use stdClass;

	class PurchaseInfo extends AbstractEntity
	{
		protected $CS;
		protected $RMR;
		protected $DealerId;
		protected $UserId;
		protected $LastUpdated;
		protected $Source;

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

		protected function getEntityObj()
		{
			$entityObj = new stdClass();

			$entityObj->CS = $this->CS;
			$entityObj->RMR = $this->RMR;
			$entityObj->DealerId = $this->DealerId;
			$entityObj->UserId = $this->UserId;
			$entityObj->LastUpdated = $this->LastUpdated;
			$entityObj->Source = $this->Source;

			return $entityObj;
		}
	}