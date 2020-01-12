<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Storelocator module install script
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
$this->startSetup();
$prefix = Mage::getConfig()->getTablePrefix();

$sql = "
    ALTER TABLE `{$prefix}plugincompany_storelocator_storelocation_comment` 
    ADD COLUMN `rating` TINYINT(4) NOT NULL DEFAULT 0 AFTER `created_at`;
";

$this->run($sql);

$this->endSetup();
