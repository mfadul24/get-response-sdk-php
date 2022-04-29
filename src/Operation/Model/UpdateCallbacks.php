<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCallbacks extends BaseModel
{
    private string $url = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\CallbackActions $actions = self::FIELD_NOT_SET;


    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    public function setActions(CallbackActions $actions)
    {
        $this->actions = $actions;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'url' => $this->url,
            'actions' => $this->actions,
        ];

        return $this->filterUnsetFields($data);
    }
}
