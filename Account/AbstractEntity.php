<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormattable;

	abstract class AbstractEntity
	{
		protected abstract function create($entity);
	}