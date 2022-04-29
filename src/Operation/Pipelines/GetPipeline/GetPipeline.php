<?php
namespace Getresponse\Sdk\Operation\Pipelines\GetPipeline;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetPipeline extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/pipelines/{pipelineId}';

    private ?\Getresponse\Sdk\Operation\Pipelines\GetPipeline\GetPipelineFields $fields = null;


    /**
     * @param string $pipelineId
     */
    public function __construct(private $pipelineId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{pipelineId}'],
            [$this->pipelineId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetPipelineFields $fields)
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
