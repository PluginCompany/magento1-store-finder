<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store Location EAV collection resource model
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Model_Resource_Storelocationeav_Collection
    extends Mage_Catalog_Model_Resource_Collection_Abstract {
    protected $_joinedFields = array();
    /**
     * constructor
     * @access public
     * @return void
     * @author Milan Simek
     */
    protected function _construct(){
        parent::_construct();
        $this->_init('plugincompany_storelocator/storelocationeav');
    }
    /**
     * get storelocationeavs as array
     * @access protected
     * @param string $valueField
     * @param string $labelField
     * @param array $additional
     * @return array
     * @author Milan Simek
     */
    protected function _toOptionArray($valueField='entity_id', $labelField='customer_attr_one', $additional=array()){
        $this->addAttributeToSelect('customer_attr_one');
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }
    /**
     * get options hash
     * @access protected
     * @param string $valueField
     * @param string $labelField
     * @return array
     * @author Milan Simek
     */
    protected function _toOptionHash($valueField='entity_id', $labelField='customer_attr_one'){
        $this->addAttributeToSelect('customer_attr_one');
        return parent::_toOptionHash($valueField, $labelField);
    }
    /**
     * Get SQL for get record count.
     * Extra GROUP BY strip added.
     * @access public
     * @return Varien_Db_Select
     * @author Milan Simek
     */
    public function getSelectCountSql(){
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(Zend_Db_Select::GROUP);
        return $countSelect;
    }
}
