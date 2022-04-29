<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TemplateColorVariantShort extends BaseModel
{
    private string $thumbnail = self::FIELD_NOT_SET;


    /**
     * @param string $templateColorId
     * @param string $name
     * @param string $colorHex
     * @param string $preview
     * @param string $href
     */
    public function __construct(private $templateColorId, private $name, private $colorHex, private $preview, private $href)
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
        ];

        return $this->filterUnsetFields($data);
    }
}
