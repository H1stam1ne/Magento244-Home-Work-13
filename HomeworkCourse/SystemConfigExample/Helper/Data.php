<?php
namespace HomeworkCourse\SystemConfigExample\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper
{

    /**
     * @param Context $context
     */

    public function __construct(Context $context)
    {        
        parent::__construct($context);
    }

    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'homeworkcourse/general/enable',
            $scope
        );
    }

    public function isEnabledUAH($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'homeworkcourse/general/UAH',
            $scope
        );
    }

    public function isEnabledUSD($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'homeworkcourse/general/USD',
            $scope
        );
    }

    public function isEnabledEURO($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'homeworkcourse/general/EURO',
            $scope
        );
    }

    // --- --- Get info --- --- //

    public function getUAH($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'homeworkcourse/general/course_UAH',
            $scope
        );
    }

    public function getUSD($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'homeworkcourse/general/course_USD',
            $scope
        );
    }

    public function getEURO($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'homeworkcourse/general/course_EURO',
            $scope
        );
    }
}
