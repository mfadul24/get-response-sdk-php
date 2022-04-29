<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateShortDetails extends BaseModel
{
    /** @var \Getresponse\Sdk\Operation\Model\TemplateCategoryShort[] */
    private string|array $category = self::FIELD_NOT_SET;


    /**
     * @param string $templateId
     * @param string $href
     */
    public function __construct(private $templateId, private $href)
    {
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\TemplateCategoryShort[] $category
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'templateId' => $this->templateId,
            'href' => $this->href,
            'category' => $this->category,
        ];

        return $this->filterUnsetFields($data);
    }
}
