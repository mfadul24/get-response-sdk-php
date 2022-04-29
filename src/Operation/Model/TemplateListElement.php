<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateListElement extends BaseModel
{
    /** @var \Getresponse\Sdk\Operation\Model\TemplateCategoryShort[] */
    private string|array $category = self::FIELD_NOT_SET;


    /**
     * @param string $templateId
     * @param string $href
     * @param string $isFavourite
     * @param \Getresponse\Sdk\Operation\Model\TemplateColorVariantShort[] $colorVariants
     */
    public function __construct(private $templateId, private $href, private $isFavourite, private readonly array $colorVariants)
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
            'isFavourite' => $this->isFavourite,
            'category' => $this->category,
            'colorVariants' => $this->colorVariants,
        ];

        return $this->filterUnsetFields($data);
    }
}
