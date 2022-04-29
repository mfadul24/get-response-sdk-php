<?php
namespace Getresponse\Sdk\Operation\Model;

class RssNewsletterSendMonthlySettings extends RssNewsletterSendSettings
{
    /**
     * @param string $filter
     * @param int $sendAtHour
     * @param int $sendAtMonthDay
     */
    public function __construct($filter, private $sendAtHour, private $sendAtMonthDay)
    {
        parent::__construct('monthly', $filter);
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'sendAtHour' => $this->sendAtHour,
            'sendAtMonthDay' => $this->sendAtMonthDay,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
