<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateColorVariant extends BaseModel
{
    private string $thumbnail = self::FIELD_NOT_SET;


    /**
     * @param string $templateColorId
     * @param string $name
     * @param string $colorHex
     * @param string $preview
     * @param string $href
     * @param \Getresponse\Sdk\Operation\Model\TemplateShortDetails[] $template
     * @param string $htmlContent
     */
    public function __construct(private $templateColorId, private $name, private $colorHex, private $preview, private $href, private readonly array $template, private $htmlContent)
    {
    }


    /**
     * @param string $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'templateColorId' => $this->templateColorId,
            'name' => $this->name,
            'colorHex' => $this->colorHex,
            'thumbnail' => $this->thumbnail,
            'preview' => $this->preview,
            'href' => $this->href,
            'template' => $this->template,
            'htmlContent' => $this->htmlContent,
        ];

        return $this->filterUnsetFields($data);
    }
}
