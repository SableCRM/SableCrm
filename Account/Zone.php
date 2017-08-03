<?php

	namespace WSI\Account;

	class Zone extends AbstractEntity
	{
		protected $zoneId;
		protected $zoneName;
		protected $zoneStateId;
		protected $eventId;
		protected $equipLocId;
		protected $equipTypeId;

		public function getName()
		{
			if($this->name)
			{
				return $this->name;
			}
		}

		protected function setName($name)
		{
			$this->name = $name;
		}

		public function getEventId()
		{
			if($this->eventId)
			{
				return $this->eventId;
			}
		}

		protected function setEventId($eventId)
		{
			$this->eventId = $eventId;
		}

		public function getEquipLocId()
		{
			if($this->equipLocId)
			{
				return $this->equipLocId;
			}
		}

		protected function setEquipLocId($equipLocId)
		{
			$this->equipLocId = $equipLocId;
		}

		public function getEquipTypeId()
		{
			if($this->equipTypeId)
			{
				return $this->equipTypeId;
			}
		}

		protected function setEquipTypeId($equipTypeId)
		{
			$this->equipTypeId = $equipTypeId;
		}

		public function getZoneId()
		{
			if($this->zoneId)
			{
				return $this->zoneId;
			}
		}

		protected function setZoneId($zoneId)
		{
			$this->zoneId = $zoneId;
		}

		public function getZoneStateId()
		{
			if($this->zoneStateId)
			{
				return $this->zoneStateId;
			}
		}

		protected function setZoneStateId($zoneStateId)
		{
			$this->zoneStateId = $zoneStateId;
		}
	}