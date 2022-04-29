<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TransactionalEmailRecipientTo extends BaseModel
{
    private string $validSince = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;


    /**
     * @param string $email
     */
    public function __construct(private $email)
    {
    }


    /**
     * @param string $validSince
     */
    public function setValidSince($validSince)
    {
        $this->validSince = $validSince;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'validSince' => $this->validSince,
            'email' => $this->email,
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
