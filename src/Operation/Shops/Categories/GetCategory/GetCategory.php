<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\GetCategory;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCategory extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/categories/{categoryId}';

    private ?\Getresponse\Sdk\Operation\Shops\Categories\GetCategory\GetCategoryFields $fields = null;


    /**
     * @param string $shopId
     * @param string $categoryId
     */
    public function __construct(private $shopId, private $categoryId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{categoryId}'],
            [$this->shopId, $this->categoryId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetCategoryFields $fields)
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
