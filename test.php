<?php

	use WSI\Account\Agency;
	use WSI\Account\Contact;
	use WSI\Account\formats\AgenciesAsXml;
	use WSI\Account\formats\ZonesAsXml;
	use WSI\Account\WSICollections;
	use WSI\Account\Zone;

	require_once "bootstrap.php";

	echo "<pre>";

	$arrayZones = [
		[
			"zoneId" => 1,
			"zoneName" => "Front door",
			"zoneStateId" => "good",
			"eventId" => 1140,
			"equipLocId" => "basement",
			"equipTypeId" => "wsr",
		],
		[
			"zoneId" => 2,
			"zoneName" => "Side door",
			"eventType" => 1005,
			"equipmentType" => "leg",
		],
		[
			"zoneId" => 3,
			"zoneName" => "Kitchen door",
			"eventType" => 1633,
			"equipmentType" => "wsr",
		],
	];

	$jsonZones = '[{"zoneId":1,"zoneName":"front door","eventType":1140,"equipmentType":"wsr"},{"zoneId":1,"zoneName":"front door","eventType":1140,"equipmentType":"wsr"},{"zoneId":1,"zoneName":"front door","eventType":1140,"equipmentType":"wsr"}]';

	$arrayContacts = [
		[
			"firstName" => "Ainsley",
			"lastName" => "Clarke",
			"contactTypeId" => "Special",
			"relationId" => "Owner",
			"authId" => "police",
			"hasKeyFlag" => "Y",
			"phone1" => 2019885510,
			"phoneTypeId1" => "Cell",
			"contractSignerFlag" => "Y",
			"contlTypeNo" => 5001
		],
		[
			"firstName" => "Ainsley",
			"lastName" => "Clarke",
			"contactTypeId" => "Special",
			"relationId" => "Owner",
			"authId" => "police",
			"contractSignerFlag" => "N",
			"hasKeyFlag" => "Y",
			"phone1" => 2019885510,
			"phoneTypeId1" => "Cell",
			"contlTypeNo" => 5000
		],
		[
			"firstName" => "Ainsley",
			"lastName" => "Clarke",
			"contactTypeId" => "Special",
			"contractSignerFlag" => "B",
			"relationId" => "Owner",
			"authId" => "police",
			"hasKeyFlag" => "Y",
			"phone1" => 2019885510,
			"phoneTypeId1" => "Cell",
			"contlTypeNo" => 5020
		],
	];

	$jsonContacts = '[{"firstName":"Ainsley","lastName":"Clarke","contactTypeId":"Special","relationId":"Owner","authId":"police","hasKeyFlag":"Y","phone1":2019885510,"phoneTypeId1":"Cell","contractSignerFlag":"Y","contlTypeNo":5001},{"firstName":"Ainsley","lastName":"Clarke","contactTypeId":"Special","relationId":"Owner","authId":"police","contractSignerFlag":"N","hasKeyFlag":"Y","phone1":2019885510,"phoneTypeId1":"Cell","contlTypeNo":5000},{"firstName":"Ainsley","lastName":"Clarke","contactTypeId":"Special","contractSignerFlag":"B","relationId":"Owner","authId":"police","hasKeyFlag":"Y","phone1":2019885510,"phoneTypeId1":"Cell","contlTypeNo":5020}]';

	$arrayAgencies = [
		[
			"agencyTypeId" => "test",
			"phone1" => 2015526233,
			"agencyNo" => 2580,
		],
		[
			"agencyTypeId" => "test",
			"phone1" => 2015526233,
			"agencyNo" => 2580,
		],
		[
			"agencyTypeId" => "test",
			"phone1" => 2015526233,
			"agencyNo" => 2580,
		],
	];

	$jsonAgencies = '[{"agencyTypeId":"test","phone1":2015526233,"agencyNo":2580},{"agencyTypeId":"test","phone1":2015526233,"agencyNo":2580},{"agencyTypeId":"test","phone1":2015526233,"agencyNo":2580}]';

	$contacts = new Contact();
	$agencies = new Agency();
	$zones    = new Zone();
	$wsiCollection = new WSICollections(new ZonesAsXml());

	print_r($contacts->create($jsonContacts));

	print_r($agencies->create($arrayAgencies));

	print_r($zones->create($jsonZones));

	print_r($wsiCollection->getAll());