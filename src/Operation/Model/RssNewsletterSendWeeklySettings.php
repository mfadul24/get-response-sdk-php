<?php
namespace Getresponse\Sdk\Operation\Model;

class RssNewsletterSendWeeklySettings extends RssNewsletterSendSettings
{
    /**
     * @param string $filter
     * @param int $sendAtHour
     * @param string $sendAtWeekDay
     */
    public function __construct($filter, private $sendAtHour, private $sendAtWeekDay)
    {
        parent::__construct('weekly', $filter);
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'sendAtHour' => $this->sendAtHour,
            'sendAtWeekDay' => $this->sendAtWeekDay,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
