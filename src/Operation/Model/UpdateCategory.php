<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCategory extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $parentId = self::FIELD_NOT_SET;

    private string|bool $isDefault = self::FIELD_NOT_SET;

    private string $url = self::FIELD_NOT_SET;

    private string $externalId = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }


    /**
     * @param bool $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'parentId' => $this->parentId,
            'isDefault' => $this->isDefault,
            'url' => $this->url,
            'externalId' => $this->externalId,
        ];

        return $this->filterUnsetFields($data);
    }
}
