<?php

	namespace WSI\Account;

	use stdClass;

	class Agency extends AbstractEntity
	{
		protected $phone1;
		protected $agencyNo;
		protected $agencyTypeId;

		public function setAgencyTypeId($agencyTypeId)
		{
			$this->agencyTypeId = $agencyTypeId;
		}

		public function setPhone1($phone1)
		{
			$this->phone1 = $phone1;
		}

		public function setAgencyNo($agencyNo)
		{
			$this->agencyNo = $agencyNo;
		}

		protected function getEntityObj()
		{
			$entityObj = new stdClass();

			$entityObj->phone1 = $this->phone1;
			$entityObj->agency_no = $this->agencyNo;
			$entityObj->agencytype_id = $this->agencyTypeId;

			return $entityObj;
		}
	}