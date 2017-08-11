<?php

	namespace WSI\Account;

	use stdClass;

	class Zone extends AbstractEntity
	{
		protected $zoneId;
		protected $zoneName;
		protected $zoneStateId = "A";
		protected $eventId;
		protected $equipLocId = "OTHR";
		protected $equipTypeId;

		protected function setZoneName($name)
		{
			$this->zoneName = $name;
		}

		protected function setEventId($eventId)
		{
			$this->eventId = $eventId;
		}

		protected function setEquipLocId($equipLocId)
		{
			$this->equipLocId = $equipLocId;
		}

		protected function setEquipTypeId($equipTypeId)
		{
			$this->equipTypeId = $equipTypeId;
		}

		protected function setZoneId($zoneId)
		{
			$this->zoneId = $zoneId;
		}

		protected function setZoneStateId($zoneStateId)
		{
			$this->zoneStateId = $zoneStateId;
		}

		function getEntityObj()
		{
			$entityObj = new stdClass();

			$entityObj->zone_id = $this->zoneId;
			$entityObj->zone_comment = $this->zoneName;
			$entityObj->zonestate_id = $this->zoneStateId;
			$entityObj->event_id = $this->eventId;
			$entityObj->equiploc_id = $this->equipLocId;
			$entityObj->equiptype_id = $this->equipTypeId;

			return $entityObj;
		}
	}