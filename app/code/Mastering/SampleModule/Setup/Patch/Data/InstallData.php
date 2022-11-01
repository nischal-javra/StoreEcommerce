<?php
namespace Mastering\SampleModule\Setup\Patch\Data;

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
            ["name" => "Nischal", "description" => "My name is Nischal Shakya"],
            ["name" => "Logan", "description" => "My name is Logan Shakya"]
        ];

        $this->moduleDataSetup->getConnection()->startSetup();
        $this->moduleDataSetup->getConnection()->insertMultiple(
            $this->moduleDataSetup->getTable("mastering_sample_item"), $data
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
