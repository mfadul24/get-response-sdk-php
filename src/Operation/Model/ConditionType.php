<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

abstract class ConditionType extends BaseModel
{
    /**
     * @param string $conditionType
     */
    public function __construct(private $conditionType)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'conditionType' => $this->conditionType,
        ];

        return $this->filterUnsetFields($data);
    }
}
