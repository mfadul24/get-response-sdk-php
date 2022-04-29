<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewFromField extends BaseModel
{
    /**
     * @param string $email
     * @param string $name
     */
    public function __construct(private $email, private $name)
    {
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
