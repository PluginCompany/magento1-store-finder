<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Storelocator module upgrade script
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
$this->startSetup();

$this
    ->getConnection()
    ->addColumn($this->getTable('plugincompany_storelocator/eav_attribute'), 'store_ids',  array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => false,
        'length'    => 255,
        'comment'   => 'Enabled for store IDS',
        'default'   => 0
));

$this->endSetup();
