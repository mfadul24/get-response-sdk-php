<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TransactionalEmailRecipient extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;


    /**
     * @param string $email
     */
    public function __construct(private $email)
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
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'email' => $this->email,
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
