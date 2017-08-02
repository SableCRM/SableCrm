<?php

	namespace WSI\Account\interfaces;

	interface IAgencyFormat
	{
		public function getAgencies(IFormattable $agencies);
	}