<?php

	namespace WSI\Account\formats;

	use WSI\Account\Zone;
	use WSI\Account\interfaces\IFormattable;
	use WSI\Account\interfaces\IZoneFormat;

	class ZonesAsXml implements IZoneFormat
	{
		private $zones;

		public function getZones(IFormattable $zones)
		{
			$this->formatZones($zones->getCollection());

			return '<Zones>'.$this->zones.'</Zones>';
		}

		public function formatZones($zones)
		{
			foreach($zones as $zone)
			{
				$zone = $this->returnZone($zone);

				$this->zones .= '<Zone zone_id="'.$zone->getZoneId().'" zonestate_id="'.$zone->getZoneStateId().'" event_id="'.$zone->getEventId().'" equiploc_id="'.$zone->getEquipLocId().'" equiptype_id="'.$zone->getEquipTypeId().'" zone_comment="'.$zone->getName().'" />';
			}
		}

		private function returnZone(Zone $zone)
		{
			return $zone;
		}
	}