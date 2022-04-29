<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SimpleProductCategory extends BaseModel
{
    private string $url = self::FIELD_NOT_SET;

    private string $externalId = self::FIELD_NOT_SET;

    private string $parentId = self::FIELD_NOT_SET;

    private string $isDefault = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     * @param string $name
     * @param string $href
     */
    public function __construct(private $categoryId, private $name, private $href)
    {
    }


    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }


    /**
     * @param string $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'categoryId' => $this->categoryId,
            'name' => $this->name,
            'url' => $this->url,
            'externalId' => $this->externalId,
            'href' => $this->href,
            'parentId' => $this->parentId,
            'isDefault' => $this->isDefault,
        ];

        return $this->filterUnsetFields($data);
    }
}
