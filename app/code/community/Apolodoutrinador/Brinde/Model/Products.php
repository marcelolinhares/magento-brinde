<?php

class Apolodoutrinador_Brinde_Model_Products extends Mage_Eav_Model_Entity_Attribute_Source_Table {
	

public function getAllOptions()
    {            

        // le todos os produtos
    	$products = Mage::getModel('catalog/product')
                ->getCollection()
                ->addAttributeToSelect('*'); //->toOptionArray();

        // inicializa o array vazio
        $options = array();

        // itera
        foreach ($products as $p) {

            // popula o array com o nome e o id
        	$options[] = array(
        		'label' => $p->getName(),
        		'value' => $p->getId()
        	);
        }

//        Mage::log("options >> " . print_r($options, true));

        return $options;
    }

}