<?php
namespace Getresponse\Sdk\Operation\Webinars\GetWebinar;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetWebinar extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/webinars/{webinarId}';

    private ?\Getresponse\Sdk\Operation\Webinars\GetWebinar\GetWebinarFields $fields = null;


    /**
     * @param string $webinarId
     */
    public function __construct(private $webinarId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{webinarId}'],
            [$this->webinarId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetWebinarFields $fields)
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
