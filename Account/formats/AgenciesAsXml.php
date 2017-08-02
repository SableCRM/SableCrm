<?php

	namespace WSI\Account\formats;

	use WSI\Account\Agency;
	use WSI\Account\interfaces\IFormattable;

	class AgenciesAsXml implements \WSI\Account\interfaces\IAgencyFormat
	{
		private $agencies;

		public function getAgencies(IFormattable $agencies)
		{
			$this->formatAgencies($agencies->getCollection());

			return '<Zones>'.$this->agencies.'</Zones>';
		}

		public function formatAgencies($agencies)
		{
			foreach($agencies as $agency)
			{
				$agency = $this->returnAgency($agency);

				$this->agencies .= '<SiteAgencyPermit agencytype_id="'.$agency->getAgencyTypeId().'" phone1="'.$agency->getPhone1().'" agency_no="'.$agency->getAgencyNo().'" />';
			}
		}

		private function returnAgency(Agency $agency)
		{
			return $agency;
		}
	}