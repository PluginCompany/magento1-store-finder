<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Model_Import_Image extends Varien_File_Uploader {

    protected function _moveFile($tmpPath, $destPath){
        copy($tmpPath,$destPath);
        return true;
    }
}