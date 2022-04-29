<?php
namespace Getresponse\Sdk\Operation\Suppressions\GetSuppression;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSuppression extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/suppressions/{suppressionId}';

    private ?\Getresponse\Sdk\Operation\Suppressions\GetSuppression\GetSuppressionFields $fields = null;


    /**
     * @param string $suppressionId
     */
    public function __construct(private $suppressionId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{suppressionId}'],
            [$this->suppressionId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetSuppressionFields $fields)
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
