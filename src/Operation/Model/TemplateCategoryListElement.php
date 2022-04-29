<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateCategoryListElement extends BaseModel
{
    private string $type = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     * @param string $name
     * @param string $templates
     */
    public function __construct(private $categoryId, private $name, private $templates)
    {
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'categoryId' => $this->categoryId,
            'name' => $this->name,
            'type' => $this->type,
            'templates' => $this->templates,
        ];

        return $this->filterUnsetFields($data);
    }
}
