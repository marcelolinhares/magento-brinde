<?php

class Apolodoutrinador_Brinde_Block_Regra 
	extends Mage_Catalog_Block_Product_View {
	
	public function hasBrinde() {

		$product = $this->getProduct();

		$enableProduct = $product->getData('habilitar_brinde');

        return $enableProduct;

	}


	public function getBrinde() {

		if (!$this->hasBrinde()) {
			return false;
		}

		// pega o id do produto brinde
		$productId = $this->getProduct()->getData('produtos_de_brindes');

		// carrega o produto com o id do brinde
		$productObject = Mage::getModel('catalog/product')
			->load($productId);

		return $productObject->getData('name');

	}
}