<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateAccount extends BaseModel
{
    private string $firstName = self::FIELD_NOT_SET;

    private string $lastName = self::FIELD_NOT_SET;

    private string $companyName = self::FIELD_NOT_SET;

    private string $phone = self::FIELD_NOT_SET;

    private string $state = self::FIELD_NOT_SET;

    private string $city = self::FIELD_NOT_SET;

    private string $street = self::FIELD_NOT_SET;

    private string $zipCode = self::FIELD_NOT_SET;

    private string $numberOfEmployees = self::FIELD_NOT_SET;

    private string $timeFormat = self::FIELD_NOT_SET;


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
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }


    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'companyName' => $this->companyName,
            'phone' => $this->phone,
            'state' => $this->state,
            'city' => $this->city,
            'street' => $this->street,
            'zipCode' => $this->zipCode,
            'numberOfEmployees' => $this->numberOfEmployees,
            'timeFormat' => $this->timeFormat,
        ];

        return $this->filterUnsetFields($data);
    }
}
