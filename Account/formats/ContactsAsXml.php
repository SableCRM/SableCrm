<?php

	namespace WSI\Account\formats;

	use WSI\Account\Contact;
	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;

	class ContactsAsXml implements IFormat
	{
		protected $contacts;

		public function format($collectionOfContacts)
		{
			$this->formatContacts($collectionOfContacts);

			return '<Contacts>'.$this->contacts.'</Contacts>';
		}

		public function formatContacts($contacts)
		{
			foreach($contacts as $contact)
			{
				$contact = $this->castToTypeofContact($contact);

				$this->contacts .= '<Contact last_name="'.$contact->getLastName().'" first_name="'.$contact->getFirstName().'" ctactype_id="'.$contact->getContactTypeId().'" relation_id="'.$contact->getRelationId().'" auth_id="'.$contact->getAuthId().'" contract_signer_flag="'.$contact->getContractSignerFlag().'" has_key_flag="'.$contact->getHasKeyFlag().'" phone1="'.$contact->getPhone1().'" phonetype_id1="'.$contact->getPhoneTypeId1().'" contltype_no="'.$contact->getContlTypeNo().'" />';
			}
		}

		private function castToTypeofContact(Contact $contact)
		{
			return $contact;
		}
	}