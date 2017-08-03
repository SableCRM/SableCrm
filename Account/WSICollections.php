<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;
	use WSI\Account\interfaces\IWSICollection;

	class WSICollections implements IWSICollection, IFormattable
	{
		protected $collectionOfEntities = [];
		protected $entity;
		protected $format;

		public function __construct($collectionOfEntities, AbstractEntity $entity, IFormat $format)
		{
			$this->entity = $entity;
			$this->format = $format;

			foreach($this->outputCollectionOfObjects($collectionOfEntities) as $entity)
			{
				$this->add($this->entity->create($entity));
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

		public function add(AbstractEntity $entity)
		{
			$this->collectionOfEntities[] = $entity;

			return $this;
		}

		public function remove(AbstractEntity $entity)
		{
			$amountOfEntitiesInCollection = count($this->collectionOfEntities);

			$indexOfEntityToRemove = array_search($entity, $this->collectionOfEntities);

			unset($this->collectionOfEntities[$indexOfEntityToRemove]);

			if(count($this->collectionOfEntities) == $amountOfEntitiesInCollection)
			{
				throw new \Exception("Unable to remove entity, entity not found in collection");
			}

			return $this;
		}

		public function update(AbstractEntity $entity)
		{
			$indexOfEntityToUpdate = array_search($entity, $this->collectionOfEntities);

			return $this->collectionOfEntities[$indexOfEntityToUpdate];
		}

		public function getAll()
		{
			return $this->format->format($this->collectionOfEntities);
		}
	}