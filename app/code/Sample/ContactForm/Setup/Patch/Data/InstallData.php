<?php
namespace Sample\ContactForm\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements DataPatchInterface
{
	protected $moduleDataSetup;
	
	public function __construct(ModuleDataSetupInterface $moduleDataSetup){
		$this->moduleDataSetup = $moduleDataSetup;
	}
	
	public function apply(){
		
		$data = [
			["name" => "Nischal"],
			["name" => "Logan"]
		];

		$this->moduleDataSetup->getConnection()->startSetup();
		$this->moduleDataSetup->getConnection()->insertMultiple(
			$this->moduleDataSetup->getTable("sample_contact_form"), $data
		);
		$this->moduleDataSetup->getConnection()->endSetup();
	}

	public static function getDependencies(){
		return [];
	}

	public function getAliases(){
		return [];
	}
	
}