<?php

	namespace WSI\Account\formats;

	use WSI\Account\Contact;

	class ContactsAsXml extends AbstractFormats
	{
		public function formatEntity($collectionOfContacts)
		{
			foreach($collectionOfContacts as $contact)
			{
				$contact = $this->castToTypeofContact($contact);

				 $this->formattedEntity .= '<Contact last_name="'.$contact->getLastName().'" first_name="'.$contact->getFirstName().'" ctactype_id="'.$contact->getContactTypeId().'" relation_id="'.$contact->getRelationId().'" auth_id="'.$contact->getAuthId().'" contract_signer_flag="'.$contact->getContractSignerFlag().'" has_key_flag="'.$contact->getHasKeyFlag().'" phone1="'.$contact->getPhone1().'" phonetype_id1="'.$contact->getPhoneTypeId1().'" contltype_no="'.$contact->getContlTypeNo().'" />';
			}

			return '<Contacts>'.$this->formattedEntity.'</Contacts>';
		}

		private function castToTypeofContact(Contact $contact)
		{
			return $contact;
		}
	}