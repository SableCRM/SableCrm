<?php

	namespace WSI\Account;

	class Contact extends AbstractEntity
	{
		protected $firstName;
		protected $lastName;
		protected $contactTypeId;
		protected $relationId;
		protected $authId;
		protected $contractSignerFlag;
		protected $hasKeyFlag;
		protected $phone1;
		protected $phoneTypeId1;
		protected $contlTypeNo;

		public function getFirstName()
		{
			if($this->firstName)
			{
				return $this->firstName;
			}
		}

		protected function setFirstName($firstName)
		{
			$this->firstName = $firstName;
		}

		public function getLastName()
		{
			if($this->lastName)
			{
				return $this->lastName;
			}
		}

		protected function setLastName($lastName)
		{
			$this->lastName = $lastName;
		}

		public function getContactTypeId()
		{
			if($this->contactTypeId)
			{
				return $this->contactTypeId;
			}
		}

		protected function setContactTypeId($contactTypeId)
		{
			$this->contactTypeId = $contactTypeId;
		}

		public function getRelationId()
		{
			if($this->relationId)
			{
				return $this->relationId;
			}
		}

		protected function setRelationId($relationId)
		{
			$this->relationId = $relationId;
		}

		public function getAuthId()
		{
			if($this->authId)
			{
				return $this->authId;
			}
		}

		protected function setAuthId($authId)
		{
			$this->authId = $authId;
		}

		public function getContractSignerFlag()
		{
			if($this->contractSignerFlag)
			{
				return $this->contractSignerFlag;
			}
		}

		protected function setContractSignerFlag($contractSignerFlag)
		{
			$this->contractSignerFlag = $contractSignerFlag;
		}

		public function getHasKeyFlag()
		{
			if($this->hasKeyFlag)
			{
				return $this->hasKeyFlag;
			}
		}

		protected function setHasKeyFlag($hasKeyFlag)
		{
			$this->hasKeyFlag = $hasKeyFlag;
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

		public function getPhoneTypeId1()
		{
			if($this->phoneTypeId1)
			{
				return $this->phoneTypeId1;
			}
		}

		protected function setPhoneTypeId1($phoneTypeId1)
		{
			$this->phoneTypeId1 = $phoneTypeId1;
		}

		public function getContlTypeNo()
		{
			if($this->contlTypeNo)
			{
				return $this->contlTypeNo;
			}
		}

		protected function setContlTypeNo($contlTypeNo)
		{
			$this->contlTypeNo = $contlTypeNo;
		}
	}