<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CustomDateRange extends BaseModel
{
    /**
     * @param string $from
     * @param string $to
     */
    public function __construct(private $from, private $to)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'from' => $this->from,
            'to' => $this->to,
        ];

        return $this->filterUnsetFields($data);
    }
}
