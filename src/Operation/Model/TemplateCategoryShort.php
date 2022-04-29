<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateCategoryShort extends BaseModel
{
    /**
     * @param string $categoryId
     * @param string $name
     * @param string $templates
     */
    public function __construct(private $categoryId, private $name, private $templates)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'categoryId' => $this->categoryId,
            'name' => $this->name,
            'templates' => $this->templates,
        ];

        return $this->filterUnsetFields($data);
    }
}
