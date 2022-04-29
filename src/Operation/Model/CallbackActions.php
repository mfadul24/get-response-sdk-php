<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CallbackActions extends BaseModel
{
    private string|bool $open = self::FIELD_NOT_SET;

    private string|bool $click = self::FIELD_NOT_SET;

    private string|bool $goal = self::FIELD_NOT_SET;

    private string|bool $subscribe = self::FIELD_NOT_SET;

    private string|bool $unsubscribe = self::FIELD_NOT_SET;

    private string|bool $survey = self::FIELD_NOT_SET;


    /**
     * @param bool $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }


    /**
     * @param bool $click
     */
    public function setClick($click)
    {
        $this->click = $click;
    }


    /**
     * @param bool $goal
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
    }


    /**
     * @param bool $subscribe
     */
    public function setSubscribe($subscribe)
    {
        $this->subscribe = $subscribe;
    }


    /**
     * @param bool $unsubscribe
     */
    public function setUnsubscribe($unsubscribe)
    {
        $this->unsubscribe = $unsubscribe;
    }


    /**
     * @param bool $survey
     */
    public function setSurvey($survey)
    {
        $this->survey = $survey;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'open' => $this->open,
            'click' => $this->click,
            'goal' => $this->goal,
            'subscribe' => $this->subscribe,
            'unsubscribe' => $this->unsubscribe,
            'survey' => $this->survey,
        ];

        return $this->filterUnsetFields($data);
    }
}
