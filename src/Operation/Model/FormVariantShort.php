<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FormVariantShort extends BaseModel
{
    private string $variant = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;

    private string $winner = self::FIELD_NOT_SET;

    private string $status = self::FIELD_NOT_SET;

    private string $createdOn = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FormStatistics $statistics = self::FIELD_NOT_SET;


    /**
     * @param string $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $winner
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }


    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @param string $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }


    public function setStatistics(FormStatistics $statistics)
    {
        $this->statistics = $statistics;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'variant' => $this->variant,
            'name' => $this->name,
            'winner' => $this->winner,
            'status' => $this->status,
            'createdOn' => $this->createdOn,
            'statistics' => $this->statistics,
        ];

        return $this->filterUnsetFields($data);
    }
}
