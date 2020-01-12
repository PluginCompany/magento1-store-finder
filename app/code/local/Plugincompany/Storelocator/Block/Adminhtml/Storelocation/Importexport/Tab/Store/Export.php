<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store location edit form tab
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Adminhtml_Storelocation_Importexport_Tab_Store_Export
    extends Mage_Adminhtml_Block_Widget_Form {
    /**
     * prepare the form
     * @access protected
     * @return Plugincompany_Storelocator_Block_Adminhtml_Storelocation_Edit_Tab_Form
     * @author Milan Simek
     */
    protected function _prepareForm(){
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('storelocation_');
        $form->setFieldNameSuffix('storelocation');
        $this->setForm($form);
        $fieldset = $form->addFieldset('storelocation_form', array('legend'=>Mage::helper('plugincompany_storelocator')->__('Export Store Locations')));

        $fieldset->addField('export', 'button', array(
            'label' => Mage::helper('plugincompany_storelocator')->__('Export CVS file'),
            'name'  => 'export',
            'value' => 'Export',
            'onclick' => 'window.location=\'' . Mage::helper('adminhtml')->getUrl('adminhtml/storelocator_importexport/export') . '\'',
            'class' => 'form-button'
        ));
        return parent::_prepareForm();
    }
}
