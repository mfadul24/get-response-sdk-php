<?php
namespace Getresponse\Sdk\Operation\Model;

class WebinarCondition extends ConditionType
{
    /**
     * @param string $scope
     * @param string $webinarCondition
     * @param string $contactType
     */
    public function __construct(private $scope, private $webinarCondition, private $contactType)
    {
        parent::__construct('webinar');
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'scope' => $this->scope,
            'webinarCondition' => $this->webinarCondition,
            'contactType' => $this->contactType,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
