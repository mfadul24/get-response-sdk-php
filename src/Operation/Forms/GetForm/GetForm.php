<?php
namespace Getresponse\Sdk\Operation\Forms\GetForm;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetForm extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/forms/{formId}';

    private ?\Getresponse\Sdk\Operation\Forms\GetForm\GetFormFields $fields = null;


    /**
     * @param string $formId
     */
    public function __construct(private $formId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{formId}'],
            [$this->formId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetFormFields $fields)
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
