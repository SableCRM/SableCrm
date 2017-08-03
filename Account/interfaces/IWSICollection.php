<?php

	namespace WSI\Account\interfaces;

	use WSI\Account\AbstractEntity;

	interface IWSICollection
	{
		public function add(AbstractEntity $entity);
		public function remove(AbstractEntity $entity);
		public function update(AbstractEntity $entity);
	}