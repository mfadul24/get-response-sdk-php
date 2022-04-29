<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class LoginHistoryListElement extends BaseModel
{
    private string $logoutTime = self::FIELD_NOT_SET;


    /**
     * @param string $loginTime
     * @param string $isSuccessful
     * @param string $ip
     */
    public function __construct(private $loginTime, private $isSuccessful, private $ip)
    {
    }


    /**
     * @param string $logoutTime
     */
    public function setLogoutTime($logoutTime)
    {
        $this->logoutTime = $logoutTime;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'loginTime' => $this->loginTime,
            'logoutTime' => $this->logoutTime,
            'isSuccessful' => $this->isSuccessful,
            'ip' => $this->ip,
        ];

        return $this->filterUnsetFields($data);
    }
}
