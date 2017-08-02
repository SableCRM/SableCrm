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

		public function __construct($firstName, $lastName)
		{
			$this->setFirstName($firstName);
			$this->setLastName($lastName);
		}

		public function getFirstName()
		{
			if($this->firstName)
			{
				return $this->firstName;
			}
		}

		public function setFirstName($firstName)
		{
			$this->firstName = $firstName;

			return $this;
		}

		public function getLastName()
		{
			if($this->lastName)
			{
				return $this->lastName;
			}
		}

		public function setLastName($lastName)
		{
			$this->lastName = $lastName;

			return $this;
		}

		public function getContactTypeId()
		{
			if($this->contactTypeId)
			{
				return $this->contactTypeId;
			}
		}

		public function setContactTypeId($contactTypeId)
		{
			$this->contactTypeId = $contactTypeId;

			return $this;
		}

		public function getRelationId()
		{
			if($this->relationId)
			{
				return $this->relationId;
			}
		}

		public function setRelationId($relationId)
		{
			$this->relationId = $relationId;

			return $this;
		}

		public function getAuthId()
		{
			if($this->authId)
			{
				return $this->authId;
			}
		}

		public function setAuthId($authId)
		{
			$this->authId = $authId;

			return $this;
		}

		public function getContractSignerFlag()
		{
			if($this->contractSignerFlag)
			{
				return $this->contractSignerFlag;
			}
		}

		public function setContractSignerFlag($contractSignerFlag)
		{
			$this->contractSignerFlag = $contractSignerFlag;

			return $this;
		}

		public function getHasKeyFlag()
		{
			if($this->hasKeyFlag)
			{
				return $this->hasKeyFlag;
			}
		}

		public function setHasKeyFlag($hasKeyFlag)
		{
			$this->hasKeyFlag = $hasKeyFlag;

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

		public function getPhoneTypeId1()
		{
			if($this->phoneTypeId1)
			{
				return $this->phoneTypeId1;
			}
		}

		public function setPhoneTypeId1($phoneTypeId1)
		{
			$this->phoneTypeId1 = $phoneTypeId1;

			return $this;
		}

		public function getContlTypeNo()
		{
			if($this->contlTypeNo)
			{
				return $this->contlTypeNo;
			}
		}

		public function setContlTypeNo($contlTypeNo)
		{
			$this->contlTypeNo = $contlTypeNo;

			return $this;
		}

		protected function create($entity)
		{
			// TODO: Implement create() method.
		}
	}