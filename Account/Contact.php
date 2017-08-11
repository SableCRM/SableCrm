<?php

	namespace WSI\Account;

	use stdClass;

	class Contact extends AbstractEntity
	{
		protected $firstName;
		protected $lastName;
		protected $contactTypeId;
		protected $relationId;
		protected $authId;
		protected $contractSignerFlag = "N";
		protected $hasKeyFlag = "N";
		protected $phone1;
		protected $phoneTypeId1;
		protected $contlTypeNo;

		public function setFirstName($firstName)
		{
			$this->firstName = $firstName;
		}

		public function setLastName($lastName)
		{
			$this->lastName = $lastName;
		}

		public function setContactTypeId($contactTypeId)
		{
			$this->contactTypeId = $contactTypeId;
		}

		public function setRelationId($relationId)
		{
			$this->relationId = $relationId;
		}

		public function setAuthId($authId)
		{
			$this->authId = $authId;
		}

		public function setContractSignerFlag($contractSignerFlag)
		{
			$this->contractSignerFlag = $contractSignerFlag;
		}

		public function setHasKeyFlag($hasKeyFlag)
		{
			$this->hasKeyFlag = $hasKeyFlag;
		}

		public function setPhone1($phone1)
		{
			$this->phone1 = $phone1;
		}

		public function setPhoneTypeId1($phoneTypeId1)
		{
			$this->phoneTypeId1 = $phoneTypeId1;
		}

		public function setContlTypeNo($contlTypeNo)
		{
			$this->contlTypeNo = $contlTypeNo;
		}

		protected function getEntityObj()
		{
			$entityObj = new stdClass();

			$entityObj->first_name = $this->firstName;
			$entityObj->last_name = $this->lastName;
			$entityObj->ctactype_id = $this->contactTypeId;
			$entityObj->relation_id = $this->relationId;
			$entityObj->auth_id = $this->authId;
			$entityObj->contract_signer_flag = $this->contractSignerFlag;
			$entityObj->has_key_flag = $this->hasKeyFlag;
			$entityObj->phone1 = $this->phone1;
			$entityObj->phonetype_id1 = $this->phoneTypeId1;
			$entityObj->contltype_no = $this->contlTypeNo;

			return $entityObj;
		}
	}