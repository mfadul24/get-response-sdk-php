<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\GetMetaField;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetMetaField extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/meta-fields/{metaFieldId}';

    private ?\Getresponse\Sdk\Operation\Shops\MetaFields\GetMetaField\GetMetaFieldFields $fields = null;


    /**
     * @param string $shopId
     * @param string $metaFieldId
     */
    public function __construct(private $shopId, private $metaFieldId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{metaFieldId}'],
            [$this->shopId, $this->metaFieldId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetMetaFieldFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
