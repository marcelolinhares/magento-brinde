<?php

class Apolodoutrinador_Brinde_ListaController 
	extends Mage_Core_Controller_Front_Action {



		public function indexAction() {
			
			header("Content-type: application/json");

			$products = Mage::getModel('catalog/product')
				->getCollection()
				->addAttributeToSelect('*')
				->addAttributeToFilter('habilitar_brinde','1');;

			$finalList = array();

			foreach ($products as $product) {

				$finalList[] = array(
					'sku' => $product->getData('sku'),
					'name' => $product->getData('name'),
					'price' => $product->getData('price'),
					'special_price' => $product->getData('special_price')
				);
			}	

			// print_r($finalList);
			echo json_encode($finalList);
			exit();
		}






















	public function index2Action() {
		
		$products = Mage::getModel('catalog/product')->getCollection()
			->addAttributeToFilter('habilitar_brinde','1');

		foreach ($products as $p) {
			echo "P " . $p->getId();
		}


		exit("ola " . $products->getSelect()->__toString());

	}

}