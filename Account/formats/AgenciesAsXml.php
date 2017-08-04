<?php

	namespace WSI\Account\formats;

	use WSI\Account\Agency;

	class AgenciesAsXml extends AbstractFormats
	{
		public function formatEntity($collectionOfAgencies)
		{
			foreach($collectionOfAgencies as $agency)
			{
				$agency = $this->castToTypeofAgency($agency);

				$this->formattedEntity .= '<SiteAgencyPermit agencytype_id="'.$agency->getAgencyTypeId().'" phone1="'.$agency->getPhone1().'" agency_no="'.$agency->getAgencyNo().'" />';
			}

			return '<SiteAgencyPermits>'.$this->formattedEntity.'</SiteAgencyPermits>';
		}

		private function castToTypeofAgency(Agency $agency)
		{
			return $agency;
		}
	}