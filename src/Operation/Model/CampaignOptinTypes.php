<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CampaignOptinTypes extends BaseModel
{
    private string $email = self::FIELD_NOT_SET;

    private string $api = self::FIELD_NOT_SET;

    private string $import = self::FIELD_NOT_SET;

    private string $webform = self::FIELD_NOT_SET;


    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @param string $api
     */
    public function setApi($api)
    {
        $this->api = $api;
    }


    /**
     * @param string $import
     */
    public function setImport($import)
    {
        $this->import = $import;
    }


    /**
     * @param string $webform
     */
    public function setWebform($webform)
    {
        $this->webform = $webform;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'email' => $this->email,
            'api' => $this->api,
            'import' => $this->import,
            'webform' => $this->webform,
        ];

        return $this->filterUnsetFields($data);
    }
}
