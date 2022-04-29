<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AddressListElement extends BaseModel
{
    private string $countryName = self::FIELD_NOT_SET;

    private string $firstName = self::FIELD_NOT_SET;

    private string $lastName = self::FIELD_NOT_SET;

    private string $address1 = self::FIELD_NOT_SET;

    private string $address2 = self::FIELD_NOT_SET;

    private string $city = self::FIELD_NOT_SET;

    private string $zip = self::FIELD_NOT_SET;

    private string $province = self::FIELD_NOT_SET;

    private string $provinceCode = self::FIELD_NOT_SET;

    private string $phone = self::FIELD_NOT_SET;

    private string $company = self::FIELD_NOT_SET;

    private string $href = self::FIELD_NOT_SET;

    private string $createdOn = self::FIELD_NOT_SET;

    private string $updatedOn = self::FIELD_NOT_SET;


    /**
     * @param string $addressId
     * @param string $countryCode
     * @param string $name
     */
    public function __construct(private $addressId, private $countryCode, private $name)
    {
    }


    /**
     * @param string $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
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
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }


    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }


    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }


    /**
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }


    /**
     * @param string $provinceCode
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
    }


    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @param string $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }


    /**
     * @param string $updatedOn
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'addressId' => $this->addressId,
            'countryCode' => $this->countryCode,
            'countryName' => $this->countryName,
            'name' => $this->name,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'zip' => $this->zip,
            'province' => $this->province,
            'provinceCode' => $this->provinceCode,
            'phone' => $this->phone,
            'company' => $this->company,
            'href' => $this->href,
            'createdOn' => $this->createdOn,
            'updatedOn' => $this->updatedOn,
        ];

        return $this->filterUnsetFields($data);
    }
}
