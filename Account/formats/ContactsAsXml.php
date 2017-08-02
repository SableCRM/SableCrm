<?php

	namespace WSI\Account\formats;

	use WSI\Account\Contact;
	use WSI\Account\interfaces\IContactFormat;
	use WSI\Account\interfaces\IFormattable;

	class ContactsAsXml implements IContactFormat
	{
		protected $contacts;

		public function getContacts(IFormattable $contacts)
		{
			$this->formatContacts($contacts->getCollection());

			return '<Contacts>'.$this->contacts.'</Contacts>';
		}

		public function formatContacts($contacts)
		{
			foreach($contacts as $contact)
			{
				$contact = $this->returnContact($contact);

				$this->contacts .= '<Contact last_name="'.$contact->getLastName().'" first_name="'.$contact->getFirstName().'" ctactype_id="'.$contact->getContactTypeId().'" relation_id="'.$contact->getRelationId().'" auth_id="'.$contact->getAuthId().'" contract_signer_flag="'.$contact->getContractSignerFlag().'" has_key_flag="'.$contact->getHasKeyFlag().'" phone1="'.$contact->getPhone1().'" phonetype_id1="'.$contact->getPhoneTypeId1().'" contltype_no="'
					.$contact->getContlTypeNo().'" />';
			}
		}

		private function returnContact(Contact $contact)
		{
			return $contact;
		}
	}