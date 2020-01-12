<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Adminhtml_Markers_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct()
    {
        parent::__construct();
        $this->setId('grid_id');
        // $this->setDefaultSort('COLUMN_ID');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('plugincompany_storelocator/marker')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

       $this->addColumn('marker_id',
           array(
               'header'=> $this->__('ID'),
               'width' => '50px',
               'index' => 'marker_id'
           )
       );
        $this->addColumn('title', array(
            'header'    => Mage::helper('plugincompany_storelocator')->__('Marker Title'),
            'align'     => 'left',
            'index'     => 'title',
        ));
        $this->addColumn('code', array(
            'header'    => Mage::helper('plugincompany_storelocator')->__('Code'),
            'align'     => 'left',
            'index'     => 'code',
        ));
        $this->addColumn('image', array(
            'header'    => Mage::helper('plugincompany_storelocator')->__('Image'),
            'align'     => 'center',
            'index'     => 'image',
            'renderer'  => 'Plugincompany_Storelocator_Block_Adminhtml_Markers_Grid_ImageRenderer',
            'width'     => '80px'
        ));

        $this->addExportType('*/*/exportCsv', $this->__('CSV'));
        
        $this->addExportType('*/*/exportExcel', $this->__('Excel XML'));
        
        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
       return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

        protected function _prepareMassaction()
    {
        $modelPk = Mage::getModel('plugincompany_storelocator/marker')->getResource()->getIdFieldName();
        $this->setMassactionIdField($modelPk);
        $this->getMassactionBlock()->setFormFieldName('ids');
        // $this->getMassactionBlock()->setUseSelectAll(false);
        $this->getMassactionBlock()->addItem('delete', array(
             'label'=> $this->__('Delete'),
             'url'  => $this->getUrl('*/*/massDelete'),
        ));
        return $this;
    }
    }
