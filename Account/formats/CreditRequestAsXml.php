<?php

	namespace WSI\Account\formats;

	use WSI\Account\interfaces\IFormat;

	class CreditRequestAsXml implements IFormat
	{
		public function format(array $data)
		{
			$values = "";

			foreach($data as $key => $val)
			{
				if($val !== null)
				{
					$values .= "<$key>$val</$key>";
				}
			}

			return '<CreditRequest xmlns:i="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://schemas.datacontract.org/2004/07/CreditReporting.DataController">'.$values.'</CreditRequest>';
		}
	}