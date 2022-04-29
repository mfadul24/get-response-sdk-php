<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WorkflowListElement extends BaseModel
{
    private string $dateStart = self::FIELD_NOT_SET;

    private string $dateStop = self::FIELD_NOT_SET;


    /**
     * @param string $workflowId
     * @param string $name
     * @param string $status
     * @param \Getresponse\Sdk\Operation\Model\WorkflowSubscriberStatistics $subscriberStatistics
     */
    public function __construct(private $workflowId, private $name, private $status, private readonly WorkflowSubscriberStatistics $subscriberStatistics)
    {
    }


    /**
     * @param string $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }


    /**
     * @param string $dateStop
     */
    public function setDateStop($dateStop)
    {
        $this->dateStop = $dateStop;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'workflowId' => $this->workflowId,
            'name' => $this->name,
            'status' => $this->status,
            'dateStart' => $this->dateStart,
            'dateStop' => $this->dateStop,
            'subscriberStatistics' => $this->subscriberStatistics,
        ];

        return $this->filterUnsetFields($data);
    }
}
