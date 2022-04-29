<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\Templates\GetTemplate;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTemplate extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/template-categories/{templateCategoryId}/templates/{templateId}';

    private ?\Getresponse\Sdk\Operation\TemplateCategories\Templates\GetTemplate\GetTemplateFields $fields = null;


    /**
     * @param string $templateCategoryId
     * @param string $templateId
     */
    public function __construct(private $templateCategoryId, private $templateId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{templateCategoryId}', '{templateId}'],
            [$this->templateCategoryId, $this->templateId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetTemplateFields $fields)
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
