<?php

	namespace WSI\Account;

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

		protected function setFirstName($firstName)
		{
			$this->firstName = $firstName;
		}

		protected function setLastName($lastName)
		{
			$this->lastName = $lastName;
		}

		protected function setContactTypeId($contactTypeId)
		{
			$this->contactTypeId = $contactTypeId;
		}

		protected function setRelationId($relationId)
		{
			$this->relationId = $relationId;
		}

		protected function setAuthId($authId)
		{
			$this->authId = $authId;
		}

		protected function setContractSignerFlag($contractSignerFlag)
		{
			$this->contractSignerFlag = $contractSignerFlag;
		}

		protected function setHasKeyFlag($hasKeyFlag)
		{
			$this->hasKeyFlag = $hasKeyFlag;
		}

		protected function setPhone1($phone1)
		{
			$this->phone1 = $phone1;
		}

		protected function setPhoneTypeId1($phoneTypeId1)
		{
			$this->phoneTypeId1 = $phoneTypeId1;
		}

		protected function setContlTypeNo($contlTypeNo)
		{
			$this->contlTypeNo = $contlTypeNo;
		}

		protected function getEntityObj()
		{
			// TODO: Implement getEntityObj() method.
		}
	}