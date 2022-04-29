<?php
namespace Getresponse\Sdk\Operation\Tags\GetTag;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTag extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/tags/{tagId}';

    private ?\Getresponse\Sdk\Operation\Tags\GetTag\GetTagFields $fields = null;


    /**
     * @param string $tagId
     */
    public function __construct(private $tagId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{tagId}'],
            [$this->tagId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetTagFields $fields)
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
