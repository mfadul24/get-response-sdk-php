<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TagDetails extends BaseModel
{
    private string $color = self::FIELD_NOT_SET;


    /**
     * @param string $tagId
     * @param string $name
     * @param string $createdAt
     */
    public function __construct(private $tagId, private $name, private $createdAt)
    {
    }


    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'tagId' => $this->tagId,
            'name' => $this->name,
            'color' => $this->color,
            'createdAt' => $this->createdAt,
        ];

        return $this->filterUnsetFields($data);
    }
}
