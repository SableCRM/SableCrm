<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;

	class SiteSystemOptions implements IFormattable
	{
		private $data = [];

		public function __construct($data)
		{
			foreach($data as $key => $val)
			{
				$this->data[strtoupper($key)] = strtoupper($val);
			}
		}

		public function getFormat(IFormat $siteSystemOptions)
		{
			return $siteSystemOptions->format($this->data);
		}
	}