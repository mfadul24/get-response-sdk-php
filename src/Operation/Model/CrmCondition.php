<?php
namespace Getresponse\Sdk\Operation\Model;

class CrmCondition extends ConditionType
{
    /**
     * @param string $pipelineScope
     * @param string $stageScope
     */
    public function __construct(private $pipelineScope, private $stageScope)
    {
        parent::__construct('crm');
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'pipelineScope' => $this->pipelineScope,
            'stageScope' => $this->stageScope,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
