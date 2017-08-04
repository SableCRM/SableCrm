<?php

	namespace WSI\Account\formats;

	use WSI\Account\interfaces\IFormat;

	abstract class AbstractFormats implements IFormat
	{
		protected $formattedEntity;

		protected $collectionOfEntities;

		public function __construct($collectionOfEntities)
		{
			$this->collectionOfEntities = $collectionOfEntities;
		}

		public function format()
		{
			return $this->formatEntity($this->collectionOfEntities);
		}

		protected abstract function formatEntity($collectionOfEntities);
	}