<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactActivityResource extends BaseModel
{
    private string $resourceId = self::FIELD_NOT_SET;

    private string $resourceType = self::FIELD_NOT_SET;

    private string $href = self::FIELD_NOT_SET;


    /**
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
    }


    /**
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'resourceId' => $this->resourceId,
            'resourceType' => $this->resourceType,
            'href' => $this->href,
        ];

        return $this->filterUnsetFields($data);
    }
}
