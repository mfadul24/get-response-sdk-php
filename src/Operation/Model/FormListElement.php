<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FormListElement extends BaseModel
{
    private string $formId = self::FIELD_NOT_SET;

    private string $webformId = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;

    private string $href = self::FIELD_NOT_SET;

    private string $hasVariants = self::FIELD_NOT_SET;

    private string $scriptUrl = self::FIELD_NOT_SET;

    private string $status = self::FIELD_NOT_SET;

    private string $createdOn = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FormStatistics $statistics = self::FIELD_NOT_SET;


    /**
     * @param string $formId
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
    }


    /**
     * @param string $webformId
     */
    public function setWebformId($webformId)
    {
        $this->webformId = $webformId;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @param string $hasVariants
     */
    public function setHasVariants($hasVariants)
    {
        $this->hasVariants = $hasVariants;
    }


    /**
     * @param string $scriptUrl
     */
    public function setScriptUrl($scriptUrl)
    {
        $this->scriptUrl = $scriptUrl;
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
            'formId' => $this->formId,
            'webformId' => $this->webformId,
            'name' => $this->name,
            'href' => $this->href,
            'hasVariants' => $this->hasVariants,
            'scriptUrl' => $this->scriptUrl,
            'status' => $this->status,
            'createdOn' => $this->createdOn,
            'statistics' => $this->statistics,
        ];

        return $this->filterUnsetFields($data);
    }
}
