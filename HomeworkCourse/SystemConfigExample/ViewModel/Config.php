<?php
namespace HomeworkCourse\SystemConfigExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Element\Template\Context;
use HomeworkCourse\SystemConfigExample\Helper\Data;

class Config implements ArgumentInterface
{
    /**
     * @var Data
     */
    protected $helper;

    /**
     * @var \Magento\Framework\Registry
     */
    private $_registry;

    /**
     * @var \Magento\CatalogInventory\Model\Stock\StockItemRepository
     */
    private $_stockItemRepository;

    public function __construct(
        Context $context, 
        Data $helper,
        \Magento\Framework\Registry $registry,
        \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository
    )
    {
        $this->helper = $helper;
        $this->_registry = $registry;
        $this->_stockItemRepository = $stockItemRepository;        
    }

/**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }
    
    public function isEnabledUAH()
    {
        return $this->helper->isEnabledUAH();
    }

    public function isEnabledUSD()
    {
        return $this->helper->isEnabledUSD();
    }

    public function isEnabledEURO()
    {
        return $this->helper->isEnabledEURO();
    }

    // --- --- Get info --- --- //

    public function getUAH()
    {
        return $this->helper->getUAH();
    }

    public function getUSD()
    {
        return $this->helper->getUSD();
    }

    public function getEURO()
    {
        return $this->helper->getEURO();
    }

    //--- --- CurrentProduct --- ---//

    public function getCurrentProduct()
    {
    return $this->_registry->registry('current_product');
    }

    public function getCurrentCategory()
    {
    return $this->_registry->registry('current_category');
    }

    public function getStockItem($productId)
    {
        return $this->_stockItemRepository->get($productId);
    }
}
