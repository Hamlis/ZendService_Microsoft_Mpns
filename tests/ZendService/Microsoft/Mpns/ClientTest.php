<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link       http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd New BSD License
 * @category   ZendService
 * @package    ZendService_Microsoft
 * @subpackage UnitTests
 */

namespace ZendServiceTest\Microsoft\Mpns;

use ZendServiceTest\Microsoft\Mpns\TestAsset\Client;

/**
 * @category   ZendService
 * @package    ZendService_Microsoft
 * @subpackage UnitTests
 * @group      ZendService
 * @group      ZendService_Microsoft
 * @group      ZendService_Microsoft_Mpns
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->mpns = new Client();
    }
}
