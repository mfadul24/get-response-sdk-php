<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TimezoneListElement extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $offset = self::FIELD_NOT_SET;

    private string $country = self::FIELD_NOT_SET;


    /**
     * @param string $timezoneId
     */
    public function __construct(private $timezoneId)
    {
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }


    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'timezoneId' => $this->timezoneId,
            'name' => $this->name,
            'offset' => $this->offset,
            'country' => $this->country,
        ];

        return $this->filterUnsetFields($data);
    }
}
