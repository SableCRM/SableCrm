<?php

	namespace WSI\Account\formats;

	use WSI\Account\interfaces\IFormat;

	abstract class AbstractFormats implements IFormat
	{
		protected $formattedEntity;

		protected $entityParams;

		protected $collectionOfEntities;

		public function __construct($collectionOfEntities)
		{
			$this->collectionOfEntities = $collectionOfEntities;
		}

		protected function autoFillAttributes($entity)
		{
			$value = false;

			foreach($this->entityParams as $entityParamKey => $entityParamValue)
			{
				$value .= ($val = $entity->{$entityParamValue}()) ? $entityParamKey.'="'.$val.'" ' : false;
			}

			return $value;
		}


		public function format()
		{
			return $this->formatEntity($this->collectionOfEntities);
		}

		protected abstract function formatEntity($collectionOfEntities);
	}