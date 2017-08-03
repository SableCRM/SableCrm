<?php

	use WSI\Account\Agency;
	use WSI\Account\formats\AgenciesAsXml;
	use WSI\Account\WSICollections;

	require_once "bootstrap.php";

	echo "<pre>";

//	$zonesAsJson = '[{"zoneId":1,"zoneName":"front door","eventType":1140,"equipmentType":"wsr"},{"zoneId":1,"zoneName":"front door","eventType":1140,"equipmentType":"wsr"},{"zoneId":1,"zoneName":"front door","eventType":1140,"equipmentType":"wsr"}]';
//
//	$zonesAsArray = [
//		[
//			"zoneId" => 1,
//			"zoneName" => "Front door",
//			"eventType" => 1140,
//			"equipmentType" => "wsr"
//		],
//		[
//			"zoneId" => 2,
//			"zoneName" => "Side door",
//			"eventType" => 1005,
//			"equipmentType" => "leg"
//		],
//		[
//			"zoneId" => 3,
//			"zoneName" => "Kitchen door",
//			"eventType" => 1633,
//			"equipmentType" => "wsr",
//		],
//		[
//			"zoneId" => 4,
//			"zoneName" => "Pantry door",
//			"eventType" => 2585,
//			"equipmentType" => "bwg",
//		],
//		[
//			"zoneId" => 5,
//			"zoneName" => "front door",
//			"eventType" => 1352,
//			"equipmentType" => "dsr",
//		],
//		[
//			"zoneId" => 6,
//			"zoneName" => "front door",
//			"eventType" => 9985,
//			"equipmentType" => "wsr",
//		],
//		[
//			"zoneId" => 7,
//			"zoneName" => "front door",
//			"eventType" => 4525,
//			"equipmentType" => "wsr",
//		],
//		[
//			"zoneId" => 8,
//			"zoneName" => "front door",
//			"eventType" => 4785,
//			"equipmentType" => "wsr",
//		],
//	];
//
//	$agenciesAsArray = [
//		[
//			"agencyTypeId" => 1,
//			"phone1" => 2,
//			"agencyNo" => 55,
//		]
//	];
//
//	$wsiCollection = new WSICollections($agenciesAsArray, new Agency() , new AgenciesAsXml());
//
//	print_r($wsiCollection->getAll());

	$arrayOfContacts = [
		[
			"firstName" => "Ainsley",
			"lastName" => "Clarke",
		]
	];

	$contacts = new \WSI\Account\Contact();

	print_r($contacts->create($arrayOfContacts));