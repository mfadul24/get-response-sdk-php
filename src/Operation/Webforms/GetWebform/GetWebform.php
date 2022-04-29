<?php
namespace Getresponse\Sdk\Operation\Webforms\GetWebform;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetWebform extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/webforms/{webformId}';

    private ?\Getresponse\Sdk\Operation\Webforms\GetWebform\GetWebformFields $fields = null;


    /**
     * @param string $webformId
     */
    public function __construct(private $webformId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{webformId}'],
            [$this->webformId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetWebformFields $fields)
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
