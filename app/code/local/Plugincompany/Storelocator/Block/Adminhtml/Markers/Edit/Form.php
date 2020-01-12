<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Adminhtml_Markers_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _getModel(){
        return Mage::registry('current_marker');
    }

    protected function _getHelper(){
        return Mage::helper('plugincompany_storelocator');
    }

    protected function _getModelTitle(){
        return 'Location Marker';
    }

    protected function _prepareForm()
    {
        $model  = $this->_getModel();
        $modelTitle = $this->_getModelTitle();
        $form   = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save'),
            'method'    => 'post',
            'enctype'    => 'multipart/form-data'
        ));

        $fieldset   = $form->addFieldset('base_fieldset', array(
            'legend'    => $this->_getHelper()->__("$modelTitle Information"),
            'class'     => 'fieldset-wide',
        ));

        if ($model && $model->getId()) {
            $modelPk = $model->getResource()->getIdFieldName();
            $fieldset->addField($modelPk, 'hidden', array(
                'name' => $modelPk,
            ));
        }

        $fieldset->addField('title', 'text', array(
            'name'      => 'title',
            'label'     => $this->_getHelper()->__('Marker Title'),
            'required'  => true,
            'style'     => 'max-width:400px'
        ));

        $fieldset->addField('code', 'text', array(
            'name'      => 'code',
            'label'     => $this->_getHelper()->__('Code'),
            'required'  => true,
            'style'     => 'max-width:400px',
            'class'     => 'validate-code validate-length maximum-length-30 input-text'
        ));

        $fieldset->addType(
            'image',
            Mage::getConfig()->getBlockClassName('plugincompany_storelocator/adminhtml_storelocation_helper_image')
        );
        $fieldset->addField('image', 'image', array(
            'label' => Mage::helper('plugincompany_storelocator')->__('Image'),
            'name'  => 'image',
        ));

        if($model){
            $form->setValues($model->getData());
        }
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
