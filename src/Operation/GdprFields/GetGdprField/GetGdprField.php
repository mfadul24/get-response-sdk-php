<?php
namespace Getresponse\Sdk\Operation\GdprFields\GetGdprField;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetGdprField extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/gdpr-fields/{gdprFieldId}';

    private ?\Getresponse\Sdk\Operation\GdprFields\GetGdprField\GetGdprFieldFields $fields = null;


    /**
     * @param string $gdprFieldId
     */
    public function __construct(private $gdprFieldId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{gdprFieldId}'],
            [$this->gdprFieldId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetGdprFieldFields $fields)
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
