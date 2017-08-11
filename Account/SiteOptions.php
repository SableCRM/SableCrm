<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;

	class SiteOptions implements IFormattable
	{
		private $data = [];

		public function __construct($data)
		{
			foreach($data as $key => $val)
			{
				$this->data[strtoupper($key)] = strtoupper($val);
			}
		}

		public function getFormat(IFormat $siteOptions)
		{
			return $siteOptions->format($this->data);
		}
	}