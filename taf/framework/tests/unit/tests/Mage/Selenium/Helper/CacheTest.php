<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    tests
 * @package     selenium unit tests
 * @subpackage  Mage_PHPUnit
 * @author      Magento Core Team <core@magentocommerce.com>
 * @copyright   Copyright (c) 2013 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Mage_Selenium_Helper_CacheTest extends Mage_PHPUnit_TestCase
{
    /**
     * @covers Mage_Selenium_Uimap_Abstract::__construct
     */
    public function test__construct()
    {
        $instance = new Mage_Selenium_Helper_Cache($this->_config);
        $this->assertInstanceOf('Mage_Selenium_Helper_Cache', $instance);
    }

    /**
     * @covers Mage_Selenium_Uimap_Abstract::getCache
     */
    public function testGetCache()
    {
        $instance = new Mage_Selenium_Helper_Cache($this->_config);
        $cache = $instance->getCache();
        $this->assertStringStartsWith('Zend_Cache_', get_class($cache));
        $this->assertEquals($cache, $instance->getCache());
    }
}