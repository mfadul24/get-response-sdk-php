<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WebformListElement extends BaseModel
{
    /**
     * @param string $webformId
     * @param string $name
     * @param string $href
     * @param string $scriptUrl
     * @param string $status
     * @param string $modifiedOn
     * @param \Getresponse\Sdk\Operation\Model\WebformListElementStatistics $statistics
     * @param \Getresponse\Sdk\Operation\Model\ShortCampaign $campaign
     */
    public function __construct(private $webformId, private $name, private $href, private $scriptUrl, private $status, private $modifiedOn, private readonly WebformListElementStatistics $statistics, private readonly ShortCampaign $campaign)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'webformId' => $this->webformId,
            'name' => $this->name,
            'href' => $this->href,
            'scriptUrl' => $this->scriptUrl,
            'status' => $this->status,
            'modifiedOn' => $this->modifiedOn,
            'statistics' => $this->statistics,
            'campaign' => $this->campaign,
        ];

        return $this->filterUnsetFields($data);
    }
}
