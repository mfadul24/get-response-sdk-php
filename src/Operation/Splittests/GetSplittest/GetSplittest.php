<?php
namespace Getresponse\Sdk\Operation\Splittests\GetSplittest;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSplittest extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/splittests/{splittestId}';

    private ?\Getresponse\Sdk\Operation\Splittests\GetSplittest\GetSplittestFields $fields = null;


    /**
     * @param string $splittestId
     */
    public function __construct(private $splittestId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{splittestId}'],
            [$this->splittestId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetSplittestFields $fields)
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
