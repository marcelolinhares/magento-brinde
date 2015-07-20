<?php

Mage::log('instalando script', Zend_Log::INFO, "system.log" ,true); 

$installer = $this;

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$installer->startSetup();

// cria um attribute group denominado brinde
$setup->addAttributeGroup('catalog_product', 'Default', 'Brinde', 1000);


// adiciona o attribute
$setup->addAttribute(
    'catalog_product',
    'habilitar_brinde',
array(
  'group'         =>      'Brinde',
  'label'                   => 'Habilitar Brinde',
  'type'                       => 'varchar',
  'input'                      => 'boolean',
  'backend'                    => '',
  'frontend'                   => '',
  'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
  'visible'                   => true,
  'required'                  => false,
  'user_defined'              => true,
  'unique'                    => false,
  'searchable'                => true,
  'default'                   => '',
  'filterable'                => true,
  'comparable'                => false,
  'visible_on_front'          => true,
  'filterable_in_search'      => false,
  'used_in_product_listing'   => true,
  'visible_in_advanced_search' => false,
   'sort_order'                         => 100,
  'position'                             => 1,
  'apply_to'                            => array('bundle,virtual,simple,configurable')
));

$installer->endSetup();
