<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WorkflowSubscriberStatistics extends BaseModel
{
    /**
     * @param string $completedCount
     * @param string $inProgressCount
     */
    public function __construct(private $completedCount, private $inProgressCount)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'completedCount' => $this->completedCount,
            'inProgressCount' => $this->inProgressCount,
        ];

        return $this->filterUnsetFields($data);
    }
}
