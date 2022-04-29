<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountDetailsTimeZone extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $offset = self::FIELD_NOT_SET;


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
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'offset' => $this->offset,
        ];

        return $this->filterUnsetFields($data);
    }
}
