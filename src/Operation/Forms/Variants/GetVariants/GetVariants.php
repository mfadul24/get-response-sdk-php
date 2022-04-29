<?php
namespace Getresponse\Sdk\Operation\Forms\Variants\GetVariants;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetVariants extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/forms/{formId}/variants';

    private ?\Getresponse\Sdk\Operation\Forms\Variants\GetVariants\GetVariantsFields $fields = null;


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
    public function setFields(GetVariantsFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
