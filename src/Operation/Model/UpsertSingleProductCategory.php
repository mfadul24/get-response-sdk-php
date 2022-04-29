<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertSingleProductCategory extends BaseModel
{
    private string|bool $isDefault = self::FIELD_NOT_SET;


    /**
     * @param string $categoryId
     */
    public function __construct(private $categoryId)
    {
    }


    /**
     * @param bool $isDefault
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
            'isDefault' => $this->isDefault,
        ];

        return $this->filterUnsetFields($data);
    }
}
