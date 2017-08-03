<?php

	require_once "../bootstrap.php";

	$zonesCollection = new \WSI\Account\WSICollections();

	header("Content-Type: text/json");

	$zonesCollection->add(new \WSI\Account\Zone("10", "front door"));
	$zonesCollection->add(new \WSI\Account\Zone("22", "basement window"));

	print_r($zonesCollection->getCollection());

	exit;

	$collection = new \WSI\Account\WSICollections();

	$agency = new \WSI\Account\Agency();
	$agency->setPhone1("2015858888");

	$collection->add((new \WSI\Account\Agency()));

	$collection->add($agency);

	print_r($collection->getCollection());

	$collection->update($agency)->setAgencyTypeId("big things")->setAgencyNo(100254);
	print_r($collection->getCollection());

	$collection->remove($agency);

	print_r($collection->getCollection());

	exit;

	$zoneArray = [
		[
			"zoneNumber" => 1,
			"zoneName" => "front",
			"eventType" => 1140,
			"deviceType" => "WSR",
		],
		[
			"zoneNumber" => 5,
			"zoneName" => "front",
			"eventType" => 1140,
			"deviceType" => "DSR",
		],
		[
			"zoneNumber" => 88,
			"zoneName" => "front",
			"eventType" => 1140,
			"deviceType" => "PIR",
		],
		[
			"zoneNumber" => 125,
			"zoneName" => "front",
			"eventType" => 1140,
			"deviceType" => "WSR",
		],
		[
			"zoneNumber" => 250,
			"zoneName" => "Basement",
			"eventType" => 1002,
			"deviceType" => "BRD",
		]
	];

	$zoneObject = '[{"zoneNumber":10, "zoneName":"Basement Smoke", "eventType":1902, "deviceType":"BAD"}, {"zoneNumber":1, "zoneName":"Kitchen Door", "eventType":1140, "deviceType":"BAD"}, {"zoneNumber":3, "zoneName":"Living Room Motion", "eventType":1352, "deviceType":"BAD"}]';

//	$zones = $zoneObject;

//	print_r(json_decode($zones)); exit;

	$zones = new \WSI\Account\ZonesCollection($zoneArray);

	$zoneList = $zones->getZones(new \WSI\Account\ZonesAsXml());

	print_r($zoneList);

