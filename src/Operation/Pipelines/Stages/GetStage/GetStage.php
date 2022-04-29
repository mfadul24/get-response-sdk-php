<?php
namespace Getresponse\Sdk\Operation\Pipelines\Stages\GetStage;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetStage extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/pipelines/{pipelineId}/stages/{pipelineStageId}';

    private ?\Getresponse\Sdk\Operation\Pipelines\Stages\GetStage\GetStageFields $fields = null;


    /**
     * @param string $pipelineId
     * @param string $pipelineStageId
     */
    public function __construct(private $pipelineId, private $pipelineStageId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{pipelineId}', '{pipelineStageId}'],
            [$this->pipelineId, $this->pipelineStageId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetStageFields $fields)
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
