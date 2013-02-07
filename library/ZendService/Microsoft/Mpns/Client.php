<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @category   ZendService
 * @package    ZendService_Microsoft
 * @subpackage Mpns
 */

namespace ZendService\Microsoft\Mpns;

use ZendService\Microsoft\Exception;
use Zend\Http\Client as HttpClient;

/**
 * Push notifications Client for Windows Phone
 * This class allows to send out messages to the 
 * Microsoft Push Notification Service.
 *
 * @category   ZendService
 * @package    ZendService_Microsoft
 * @subpackage Mpns
 */
class Client
{
    /**
     * @var Zend\Http\Client
     */
    protected $httpClient;

    /**
     * Get Http Client
     *
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if (!$this->httpClient instanceof HttpClient) {
            $this->httpClient = new HttpClient();
            $this->httpClient->setOptions(array(
                'strictredirects' => true
            ));
        }
        return $this->httpClient;
    }

    /**
     * Set Http Client
     *
     * @return Client
     */
    public function setHttpClient(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
        return $this;
    }
}
