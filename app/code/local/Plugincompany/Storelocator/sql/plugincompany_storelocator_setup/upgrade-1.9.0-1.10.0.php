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
    ->addColumn($this->getTable('plugincompany_storelocator/storelocation'), 'featured',  array(
        'type'      => Varien_Db_Ddl_Table::TYPE_BOOLEAN,
        'nullable'  => false,
        'length'    => 1,
        'comment'   => 'Featured Location',
        'default'   => 0
    ));
$this->getConnection()
    ->addColumn($this->getTable('plugincompany_storelocator/storelocation'), 'custom_marker',  array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => true,
        'length'    => 255,
        'comment'   => 'Custom Marker',
        'default'   => null
    ));

$table = $this->getConnection()
    ->newTable($this->getTable('plugincompany_storelocator/storelocation_marker'))
    ->addColumn('marker_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Marker ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Marker Title')
    ->addColumn('code', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Marker Code')
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'unsigned'  => true,
        'nullable'  => true,
    ), 'Marker Image')
    ->setComment('Store Location Marker Table');
$this->getConnection()->createTable($table);

$this->endSetup();
