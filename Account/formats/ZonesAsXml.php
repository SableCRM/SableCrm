<?php

	namespace WSI\Account\formats;

	use WSI\Account\Zone;
	use WSI\Account\interfaces\IFormat;
	use WSI\Account\interfaces\IFormattable;

	class ZonesAsXml implements IFormat
	{
		private $zones;

		public function format(IFormattable $collectionOfZones)
		{
			$this->formatZones($collectionOfZones->getAll());

			return '<Zones>'.$this->zones.'</Zones>';
		}

		public function formatZones($zones)
		{
			foreach($zones as $zone)
			{
				$zone = $this->castToTypeofZone($zone);

				$this->zones .= '<Zone zone_id="'.$zone->getZoneId().'" zonestate_id="'.$zone->getZoneStateId().'" event_id="'.$zone->getEventId().'" equiploc_id="'.$zone->getEquipLocId().'" equiptype_id="'.$zone->getEquipTypeId().'" zone_comment="'.$zone->getName().'" />';
			}
		}

		private function castToTypeofZone(Zone $zone)
		{
			return $zone;
		}
	}