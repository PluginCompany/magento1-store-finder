<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */ 
class Plugincompany_Storelocator_Model_Resource_Marker extends Mage_Core_Model_Resource_Db_Abstract
{

    protected function _construct()
    {
        $this->_init('plugincompany_storelocator/storelocation_marker', 'marker_id');
    }

}