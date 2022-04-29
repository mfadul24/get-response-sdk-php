<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SearchContactConditionsDetails extends BaseModel
{
    /**
     * @param array $subscribersType
     * @param string $sectionLogicOperator
     * @param SearchContactSection[] $section
     */
    public function __construct(private readonly array $subscribersType, private $sectionLogicOperator, private readonly array $section)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'subscribersType' => $this->subscribersType,
            'sectionLogicOperator' => $this->sectionLogicOperator,
            'section' => $this->section,
        ];

        return $this->filterUnsetFields($data);
    }
}
