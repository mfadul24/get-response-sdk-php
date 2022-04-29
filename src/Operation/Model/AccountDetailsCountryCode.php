<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountDetailsCountryCode extends BaseModel
{
    private string $countryCodeId = self::FIELD_NOT_SET;

    private string $countryCode = self::FIELD_NOT_SET;


    /**
     * @param string $countryCodeId
     */
    public function setCountryCodeId($countryCodeId)
    {
        $this->countryCodeId = $countryCodeId;
    }


    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'countryCodeId' => $this->countryCodeId,
            'countryCode' => $this->countryCode,
        ];

        return $this->filterUnsetFields($data);
    }
}
