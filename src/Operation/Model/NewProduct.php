<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewProduct extends BaseModel
{
    private string $type = self::FIELD_NOT_SET;

    private string $url = self::FIELD_NOT_SET;

    private string $vendor = self::FIELD_NOT_SET;

    private string $externalId = self::FIELD_NOT_SET;

    /** @var NewProductCategory[] */
    private string|array $categories = self::FIELD_NOT_SET;

    /** @var NewMetaField[] */
    private string|array $metaFields = self::FIELD_NOT_SET;


    /**
     * @param string $name
     * @param NewProductVariant[] $variants
     */
    public function __construct(private $name, private readonly array $variants)
    {
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    /**
     * @param string $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param NewProductCategory[] $categories
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }


    /**
     * @param NewMetaField[] $metaFields
     */
    public function setMetaFields(array $metaFields)
    {
        $this->metaFields = $metaFields;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type,
            'url' => $this->url,
            'vendor' => $this->vendor,
            'externalId' => $this->externalId,
            'categories' => $this->categories,
            'variants' => $this->variants,
            'metaFields' => $this->metaFields,
        ];

        return $this->filterUnsetFields($data);
    }
}
