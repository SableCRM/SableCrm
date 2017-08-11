<?php

	namespace WSI\Account\formats;

	use WSI\Account\interfaces\IFormat;

	class SiteSystemOptionsAsXml implements IFormat
	{
		public function format(array $data)
		{
			$values = "";

			foreach($data as $key => $val)
			{
				$values .= "<SiteSystemOption option_id=\"".strtoupper($key)."\" option_value=\"".strtoupper($val)."\" />";
			}

			return '<SiteSystemOptions>'.$values.'</SiteSystemOptions>';
		}
	}