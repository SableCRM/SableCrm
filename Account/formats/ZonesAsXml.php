<?php

	namespace WSI\Account\formats;

	use WSI\Account\Zone;

	class ZonesAsXml extends AbstractFormats
	{
		public function formatEntity($collectionOfZones)
		{
			foreach($collectionOfZones as $zone)
			{
				$zone = $this->castToTypeofZone($zone);

				$this->formattedEntity .= '<Zone zone_id="'.$zone->getZoneId().'" zonestate_id="'.$zone->getZoneStateId().'" event_id="'.$zone->getEventId().'" equiploc_id="'.$zone->getEquipLocId().'" equiptype_id="'.$zone->getEquipTypeId().'" zone_comment="'.$zone->getName().'" />';
			}

			return '<Zones>'.$this->formattedEntity.'</Zones>';
		}

		private function castToTypeofZone(Zone $zone)
		{
			return $zone;
		}
	}