<?php

namespace AtenSoftware\ProductExport\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        Magento\Framework\ObjectManager\ObjectManager $objectManager,
    ) {
        parent::__construct($objectManager);
    }

    public function execute()
    {
        return "hello work";
        
    }
}
?>