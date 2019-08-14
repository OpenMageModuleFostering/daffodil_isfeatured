<?php

/*
 * Featured product Extension Developed by Daffodil S/w Ltd. 
 */
?>
<?php

class Daffodil_Isfeatured_Block_Isfeatured extends Mage_Core_Block_Template {

    public function ftotalProduct() {
        $collection = Mage::getModel('catalog/product');
        $products = $collection->getCollection()
                ->addAttributeToSelect('*')
                ->addAttributeToFilter('is_featured', 1)
                ->addAttributeToFilter('status', 1)
                ->load();
        return $products;
    }

    public function getStoreconfig() {
        $enable = Mage::getStoreConfig('isfeatured/all_settings/enabled');
        $title = Mage::getStoreConfig('isfeatured/all_settings/title');
        $limit = Mage::getStoreConfig('isfeatured/all_settings/product_no');
        $featuredValues = array('enabled' => $enable, 'title' => $title, 'limit' => $limit);
        return $featuredValues;
    }

}

?>
