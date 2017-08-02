<?php

	namespace WSI\Account;

	class Agency extends AbstractEntity
	{
		protected $agencyTypeId;
		protected $phone1;
		protected $agencyNo;

		public function getAgencyTypeId()
		{
			if($this->agencyTypeId)
			{
				return $this->agencyTypeId;
			}
		}

		public function setAgencyTypeId($agencyTypeId)
		{
			$this->agencyTypeId = $agencyTypeId;

			return $this;
		}

		public function getPhone1()
		{
			if($this->phone1)
			{
				return $this->phone1;
			}
		}

		public function setPhone1($phone1)
		{
			$this->phone1 = $phone1;

			return $this;
		}

		public function getAgencyNo()
		{
			if($this->agencyNo)
			{
				return $this->agencyNo;
			}
		}

		public function setAgencyNo($agencyNo)
		{
			$this->agencyNo = $agencyNo;

			return $this;
		}

		protected function create($entity)
		{
			// TODO: Implement create() method.
		}
	}