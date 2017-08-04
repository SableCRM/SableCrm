<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormat;

	abstract class AbstractEntity
	{
		public function __set($name, $value)
		{
			if(!property_exists($this, $name))
			{
				return;
			}
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
				throw new \Exception("Unable to parse the supplied collection of entities.");
			}

			return $collectionOfEntitiesObject;
		}

		public function create($entities)
		{
			$collectionOfEntities = [];

			$entities = $this->outputCollectionOfObjects($entities);

			foreach($entities as $entity)
			{
				$entityObj = new $this;

				foreach($entity as $entityKey => $entityValue)
				{
					$entityObj->$entityKey = $entityValue;
				}

				$collectionOfEntities[] = $entityObj;
			}

			return $collectionOfEntities;
		}

		public function format(IFormat $format)
		{
			$format->format();
		}
	}