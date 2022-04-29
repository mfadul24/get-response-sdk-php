<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CategoryDetail extends BaseModel
{
    private string $parentId = self::FIELD_NOT_SET;

    private string $externalId = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     * @param string $href
     * @param string $name
     * @param string $url
     * @param string $createdOn
     * @param string $updatedOn
     */
    public function __construct(private $categoryId, private $href, private $name, private $url, private $createdOn, private $updatedOn)
    {
    }


    /**
     * @param string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
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
            'categoryId' => $this->categoryId,
            'parentId' => $this->parentId,
            'href' => $this->href,
            'name' => $this->name,
            'externalId' => $this->externalId,
            'url' => $this->url,
            'createdOn' => $this->createdOn,
            'updatedOn' => $this->updatedOn,
        ];

        return $this->filterUnsetFields($data);
    }
}
