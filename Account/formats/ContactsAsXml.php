<?php

	namespace WSI\Account\formats;

	class ContactsAsXml extends AbstractFormats
	{
		protected $entityParams = [
			"first_name" => "getFirstName",
			"last_name" => "getLastName",
			"ctactype_id" => "getContactTypeId",
			"relation_id" => "getRelationId",
			"auth_id" => "getAuthId",
			"contract_signer_flag" => "getContractSignerFlag",
			"has_key_flag" => "getHasKeyFlag",
			"phone1" => "getPhone1",
			"phonetype_id1" => "getPhoneTypeId1",
			"contltype_no" => "getContlTypeNo",
		];

		public function formatEntity($collectionOfContacts)
		{
			foreach($collectionOfContacts as $contact)
			{
				$this->formattedEntity .= "<Contact {$this->autoFillAttributes($contact)}/>";
			}

			return '<Contacts>'.$this->formattedEntity.'</Contacts>';
		}
	}