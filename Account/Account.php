<?php

	namespace WSI\Account;

	class Account
	{
		protected $SiteSystems;
		protected $zones;
		protected $SiteAgencyPermits;
		protected $Contacts;
		protected $SiteOptions;
		protected $SiteSystemOptions;

		public function __construct($siteSystems, $zones, $agencies, $contacts, $siteOptions, $siteSystemOptions)
		{
			$this->SiteSystems = $siteSystems;
			$this->zones = $zones;
			$this->SiteAgencyPermits = $agencies;
			$this->Contacts = $contacts;
			$this->SiteOptions = $siteOptions;
			$this->siteSystemOptions = $siteSystemOptions;
		}

		public function getAccount()
		{
			$values = $this->SiteSystems.$this->zones.$this->SiteAgencyPermits.$this->Contacts.$this->SiteOptions.$this->SiteSystemOptions;

			return '<Account xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">'.$values.'</Account>';
		}
	}