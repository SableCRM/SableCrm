<?php

	namespace WSI\Account;

	use Exception;
	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;

	abstract class AbstractEntity implements IFormattable
	{
		protected $collectionOfEntities;

		public function __construct($data = null)
		{
			if(!$data) return;

			$this->create($data);
		}

		protected function outputCollectionOfObjects($collectionOfEntities)
		{
			$entities = $collectionOfEntities;

			if(is_array($collectionOfEntities))
			{
				$entities = json_encode($collectionOfEntities);
			}

			return $this->entitiesToObjects($entities);
		}

		protected function entitiesToObjects($entities)
		{
			$collectionOfEntitiesObject = null;

			if(!$collectionOfEntitiesObject = json_decode($entities))
			{
				throw new Exception("Unable to parse the supplied collection of entities.");
			}

			return $collectionOfEntitiesObject;
		}

		protected function create($entities)
		{
			$entities = $this->outputCollectionOfObjects($entities);

			foreach($entities as $entity)
			{
				foreach($entity as $entityKey => $entityValue)
				{
					$functionName = "set".$entityKey;

					if(method_exists($this,$functionName))
					{
						$this->{$functionName}($entityValue);
					}
				}

				$this->collectionOfEntities[] = $this->getEntityObj();
			}
		}

		public function getFormat(IFormat $entityFormat)
		{
			if(count($this->collectionOfEntities) === 0) throw new Exception("Invalid Operation! getFormat() can only be used when passing data through the constructor");

			return $entityFormat->format($this->collectionOfEntities);
		}

		protected abstract function getEntityObj();
	}