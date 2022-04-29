<?php
namespace Getresponse\Sdk\Operation\FromFields\GetFromField;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFromField extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/from-fields/{fromFieldId}';

    private ?\Getresponse\Sdk\Operation\FromFields\GetFromField\GetFromFieldFields $fields = null;


    /**
     * @param string $fromFieldId
     */
    public function __construct(private $fromFieldId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{fromFieldId}'],
            [$this->fromFieldId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetFromFieldFields $fields)
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
