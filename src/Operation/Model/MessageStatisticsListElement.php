<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class MessageStatisticsListElement extends BaseModel
{
    /**
     * @param string $timeInterval
     * @param string $sent
     * @param string $totalOpened
     * @param string $uniqueOpened
     * @param string $totalClicked
     * @param string $uniqueClicked
     * @param string $goals
     * @param string $uniqueGoals
     * @param string $forwarded
     * @param string $unsubscribed
     * @param string $bounced
     * @param string $complaints
     */
    public function __construct(private $timeInterval, private $sent, private $totalOpened, private $uniqueOpened, private $totalClicked, private $uniqueClicked, private $goals, private $uniqueGoals, private $forwarded, private $unsubscribed, private $bounced, private $complaints)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'timeInterval' => $this->timeInterval,
            'sent' => $this->sent,
            'totalOpened' => $this->totalOpened,
            'uniqueOpened' => $this->uniqueOpened,
            'totalClicked' => $this->totalClicked,
            'uniqueClicked' => $this->uniqueClicked,
            'goals' => $this->goals,
            'uniqueGoals' => $this->uniqueGoals,
            'forwarded' => $this->forwarded,
            'unsubscribed' => $this->unsubscribed,
            'bounced' => $this->bounced,
            'complaints' => $this->complaints,
        ];

        return $this->filterUnsetFields($data);
    }
}
