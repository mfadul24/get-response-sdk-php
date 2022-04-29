<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewSearchContacts extends BaseModel
{
    /**
     * @param array $subscribersType
     * @param string $sectionLogicOperator
     * @param SearchContactSection[] $section
     * @param string $name
     */
    public function __construct(private readonly array $subscribersType, private $sectionLogicOperator, private readonly array $section, private $name)
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
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
