<?php
namespace Getresponse\Sdk\Operation\Pipelines\Stages\GetStages;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetStages extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/pipelines/{pipelineId}/stages';

    private ?\Getresponse\Sdk\Operation\Pipelines\Stages\GetStages\GetStagesFields $fields = null;


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
    public function setFields(GetStagesFields $fields)
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
