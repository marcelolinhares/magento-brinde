<?php

class Apolodoutrinador_Brinde_Model_Observer  {


public function addBrinde(Varien_Event_Observer $obs) {

    Mage::log("add carrinho");

    $cart = Mage::getSingleton('checkout/cart');

    // itera itens do carrinho
    foreach($cart->getItems() as $_item) { 

        $productId = $_item->getProduct()->getId();

        $productObject = Mage::getModel('catalog/product')
            ->load($productId);

        $hasBrinde = $productObject->getData('habilitar_brinde');

        // produto tem brinde
        if ($hasBrinde) {
            $productBrindeId = $productObject->getData('produtos_de_brindes');
            $cart->addProduct($productBrindeId);
        }
    }
}


















public function addBrinde2(Varien_Event_Observer $obs)
    {


        $cart = Mage::getSingleton('checkout/cart');
        
        $alreadyProducts = array();

        foreach($cart->getItems() as $_item) { 
            
            $id = $_item->getProduct()->getId();            

            // load product
            $productObject = Mage::getModel('catalog/product')->load($id);;

            $enableBrinde = $productObject->getData('habilitar_brinde');

            if ($enableBrinde) {
                $brindeItem = $productObject->getData('produtos_de_brindes');
               $cart->addProduct($brindeItem);
            }

        }
    }
	
}