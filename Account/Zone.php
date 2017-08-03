<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IZoneFormat;

	class Zone extends AbstractEntity
	{
		protected $zoneId;
		protected $name;
		protected $zoneStateId;
		protected $eventId;
		protected $equipLocId;
		protected $equipTypeId;

		public function __construct($zoneId, $name, $eventId, $equipTypeId)
		{
			$this->setZoneId($zoneId);
			$this->setName($name);
		}

		public function getName()
		{
			if($this->name)
			{
				return $this->name;
			}
		}

		public function setName($name)
		{
			$this->name = $name;

			return $this;
		}

		public function getEventId()
		{
			if($this->eventId)
			{
				return $this->eventId;
			}
		}

		public function setEventId($eventId)
		{
			$this->eventId = $eventId;

			return $this;
		}

		public function getEquipLocId()
		{
			if($this->equipLocId)
			{
				return $this->equipLocId;
			}
		}

		public function setEquipLocId($equipLocId)
		{
			$this->equipLocId = $equipLocId;

			return $this;
		}

		public function getEquipTypeId()
		{
			if($this->equipTypeId)
			{
				return $this->equipTypeId;
			}
		}

		public function setEquipTypeId($equipTypeId)
		{
			$this->equipTypeId = $equipTypeId;

			return $this;
		}

		public function getZoneId()
		{
			if($this->zoneId)
			{
				return $this->zoneId;
			}
		}

		public function setZoneId($zoneId)
		{
			$this->zoneId = $zoneId;

			return $this;
		}

		public function getZoneStateId()
		{
			if($this->zoneStateId)
			{
				return $this->zoneStateId;
			}
		}

		public function setZoneStateId($zoneStateId)
		{
			$this->zoneStateId = $zoneStateId;

			return $this;
		}

		protected function create($zones)
		{
			$collection = new WSICollections();

			foreach($zones as $zone)
			{
				$collection->add($this);
			}

			$this->add((new Zone($zone["zoneNumber"], $zone["zoneName"]))
				->setEventId($zone["eventType"])
				->setEquipTypeId($zone["deviceType"])
				->setEquipLocId("OTHR")
				->setZoneStateId("A")
			);
		}

		public function getZones(IZoneFormat $format)
		{
			return $format->getZones($this);
		}
	}