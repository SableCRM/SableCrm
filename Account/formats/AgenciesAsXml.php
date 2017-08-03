<?php

	namespace WSI\Account\formats;

	use WSI\Account\Agency;
	use WSI\Account\interfaces\IFormat;

	class AgenciesAsXml implements IFormat
	{
		private $agencies;

		public function format($collectionOfAgencies)
		{
			$this->formatAgencies($collectionOfAgencies);

			return '<Zones>'.$this->agencies.'</Zones>';
		}

		public function formatAgencies($agencies)
		{
			foreach($agencies as $agency)
			{
				$agency = $this->castToTypeofAgency($agency);

				$this->agencies .= '<SiteAgencyPermit agencytype_id="'.$agency->getAgencyTypeId().'" phone1="'.$agency->getPhone1().'" agency_no="'.$agency->getAgencyNo().'" />';
			}
		}

		private function castToTypeofAgency(Agency $agency)
		{
			return $agency;
		}
	}