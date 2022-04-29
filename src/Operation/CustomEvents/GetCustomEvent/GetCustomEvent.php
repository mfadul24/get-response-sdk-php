<?php
namespace Getresponse\Sdk\Operation\CustomEvents\GetCustomEvent;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCustomEvent extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/custom-events/{customEventId}';

    private ?\Getresponse\Sdk\Operation\CustomEvents\GetCustomEvent\GetCustomEventFields $fields = null;


    /**
     * @param string $customEventId
     */
    public function __construct(private $customEventId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{customEventId}'],
            [$this->customEventId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetCustomEventFields $fields)
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
