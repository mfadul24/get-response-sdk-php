<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountDetails extends BaseModel
{
    private string $firstName = self::FIELD_NOT_SET;

    private string $lastName = self::FIELD_NOT_SET;

    private string $phone = self::FIELD_NOT_SET;

    private string $companyName = self::FIELD_NOT_SET;

    private string $state = self::FIELD_NOT_SET;

    private string $city = self::FIELD_NOT_SET;

    private string $street = self::FIELD_NOT_SET;

    private string $zipCode = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\AccountDetailsCountryCode $countryCode = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\AccountDetailsIndustryTag $industryTag = self::FIELD_NOT_SET;

    private string $numberOfEmployees = self::FIELD_NOT_SET;

    private string $timeFormat = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\AccountDetailsTimeZone $timeZone = self::FIELD_NOT_SET;

    private string $href = self::FIELD_NOT_SET;


    /**
     * @param string $accountId
     * @param string $email
     */
    public function __construct(private $accountId, private $email)
    {
    }


    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }


    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }


    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }


    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }


    public function setCountryCode(AccountDetailsCountryCode $countryCode)
    {
        $this->countryCode = $countryCode;
    }


    public function setIndustryTag(AccountDetailsIndustryTag $industryTag)
    {
        $this->industryTag = $industryTag;
    }


    /**
     * @param string $numberOfEmployees
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }


    /**
     * @param string $timeFormat
     */
    public function setTimeFormat($timeFormat)
    {
        $this->timeFormat = $timeFormat;
    }


    public function setTimeZone(AccountDetailsTimeZone $timeZone)
    {
        $this->timeZone = $timeZone;
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'accountId' => $this->accountId,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'companyName' => $this->companyName,
            'state' => $this->state,
            'city' => $this->city,
            'street' => $this->street,
            'zipCode' => $this->zipCode,
            'countryCode' => $this->countryCode,
            'industryTag' => $this->industryTag,
            'numberOfEmployees' => $this->numberOfEmployees,
            'timeFormat' => $this->timeFormat,
            'timeZone' => $this->timeZone,
            'href' => $this->href,
        ];

        return $this->filterUnsetFields($data);
    }
}
