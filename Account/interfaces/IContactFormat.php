<?php

	namespace WSI\Account\interfaces;

	interface IContactFormat
	{
		public function getContacts(IFormattable $contacts);
	}