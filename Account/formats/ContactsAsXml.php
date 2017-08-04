<?php

	namespace WSI\Account\formats;

	use WSI\Account\Contact;

	class ContactsAsXml extends AbstractFormats
	{
		protected $value;

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
				$contact = $this->castToTypeofContact($contact);

				foreach($this->entityParams as $entityParamKey => $entityParamValue)
				{
					$this->value .= ($val = $contact->{$entityParamValue}()) ? $entityParamKey.'="'.$val.'" ' : false;
				}

				 $this->formattedEntity .= "<Contact {$this->value}/>";
			}

			return '<Contacts>'.$this->formattedEntity.'</Contacts>';
		}

		private function castToTypeofContact(Contact $contact)
		{
			return $contact;
		}
	}