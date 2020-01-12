<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store Location EAV resource model
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Model_Resource_Storelocationeav
    extends Mage_Catalog_Model_Resource_Abstract {

    /**
     * constructor
     * @access public
     * @author Milan Simek
     */
    public function __construct() {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('plugincompany_storelocator_storelocationeav')
            ->setConnection(
                $resource->getConnection('storelocationeav_read'),
                $resource->getConnection('storelocationeav_write')
            );

    }
    /**
     * wrapper for main table getter
     * @access public
     * @return string
     * @author Milan Simek
     */
    public function getMainTable() {
        return $this->getEntityTable();
    }
}
