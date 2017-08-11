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
				$values .= "<SiteSystemOption option_id=\"$key\" option_value=\"$val\" />";
			}

			return '<SiteSystemOptions>'.$values.'</SiteSystemOptions>';
		}
	}