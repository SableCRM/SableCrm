<?php

	namespace WSI\Account;

	use WSI\Account\interfaces\IFormattable;
	use WSI\Account\interfaces\IZoneFormat;

	class ZonesCollection implements IFormattable
	{
		private $zones = [];

		public function __construct($zones)
		{
			if(count($zones) > 0)
			{
				foreach($zones as $zone)
				{
					if(!is_array($zone))
					{
						$zone = json_decode($zone);
					}

					$this->createZone($zone);
				}
			}
		}

		public function add(Zone $zone)
		{
			$this->zones[$zone->getZoneId()] = $zone;

			return $this;
		}

		private function createZone($zone)
		{
			$this->add((new Zone($zone["zoneNumber"], $zone["zoneName"]))
				->setEventId($zone["eventType"])
				->setEquipTypeId($zone["deviceType"])
				->setEquipLocId("OTHR")
				->setZoneStateId("A")
			);
		}

		public function remove($zoneId)
		{
			$amountOfZonesInCollection = count($this->zones);

			unset($this->zones[$zoneId]);

			if(count($this->zones) == $amountOfZonesInCollection)
			{
				throw new \Exception("Unable to remove zone \"$zoneId\", zone not found in collection");
			}

			return $this;
		}

		public function update($zoneId):Zone
		{
			return $this->zones[$zoneId];
		}

		public function getCollection()
		{
			return $this->zones;
		}

		public function getZones(IZoneFormat $format)
		{
			return $format->getZones($this);
		}
	}