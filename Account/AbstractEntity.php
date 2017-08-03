<?php

	namespace WSI\Account;

	abstract class AbstractEntity
	{
		public function __set($name, $value)
		{
			if(!property_exists($this, $name))
			{
				throw new \InvalidArgumentException("The property $name does not exist in this class.");
			}

			$this->$name = $value;
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

		public abstract function create($entity);
	}