<?php

	namespace WSI\Account;

	class Agency extends AbstractEntity
	{
		protected $phone1;
		protected $agencyNo;
		protected $agencyTypeId;

		public function getAgencyTypeId()
		{
			if($this->agencyTypeId)
			{
				return $this->agencyTypeId;
			}
		}

		protected function setAgencyTypeId($agencyTypeId)
		{
			$this->agencyTypeId = $agencyTypeId;
		}

		public function getPhone1()
		{
			if($this->phone1)
			{
				return $this->phone1;
			}
		}

		protected function setPhone1($phone1)
		{
			$this->phone1 = $phone1;
		}

		public function getAgencyNo()
		{
			if($this->agencyNo)
			{
				return $this->agencyNo;
			}
		}

		protected function setAgencyNo($agencyNo)
		{
			$this->agencyNo = $agencyNo;
		}
	}