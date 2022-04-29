<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class Form extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\ShortCampaign $campaign = self::FIELD_NOT_SET;


    /**
     * @param string $formId
     * @param string $webformId
     * @param string $name
     * @param string $href
     * @param string $hasVariants
     * @param string $scriptUrl
     * @param string $status
     * @param string $createdOn
     * @param \Getresponse\Sdk\Operation\Model\FormStatistics $statistics
     * @param string $settings
     * @param \Getresponse\Sdk\Operation\Model\FormVariantShort[] $variants
     */
    public function __construct(private $formId, private $webformId, private $name, private $href, private $hasVariants, private $scriptUrl, private $status, private $createdOn, private readonly FormStatistics $statistics, private $settings, private readonly array $variants)
    {
    }


    public function setCampaign(ShortCampaign $campaign)
    {
        $this->campaign = $campaign;
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
            'settings' => $this->settings,
            'variants' => $this->variants,
            'campaign' => $this->campaign,
        ];

        return $this->filterUnsetFields($data);
    }
}
