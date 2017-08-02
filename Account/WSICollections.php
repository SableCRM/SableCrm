<?php

	namespace WSI\Account;

	class WSICollections
	{
		protected $collectionOfEntities = [];

//		public function __construct($zones)
//		{
//			if(count($zones) > 0)
//			{
//				foreach($zones as $zone)
//				{
//					if(!is_array($zone))
//					{
//						$zone = json_decode($zone);
//					}
//
//					$this->createZone($zone);
//				}
//			}
//		}

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

		public function getCollection()
		{
			return $this->collectionOfEntities;
		}
	}