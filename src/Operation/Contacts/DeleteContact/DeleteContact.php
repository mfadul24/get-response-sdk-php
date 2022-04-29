<?php
namespace Getresponse\Sdk\Operation\Contacts\DeleteContact;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteContact extends CommandOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/contacts/{contactId}';

    private ?\Getresponse\Sdk\Operation\Contacts\DeleteContact\DeleteContactUrlQueryParameters $urlParameterQuery = null;


    /**
     * @return $this
     */
    public function setUrlParameterQuery(DeleteContactUrlQueryParameters $urlParameterQuery)
    {
        $this->urlParameterQuery = $urlParameterQuery;
        return $this;
    }


    /**
     * @param string $contactId
     */
    public function __construct(private $contactId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{contactId}'],
            [$this->contactId],
            self::METHOD_URL
        );
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate() . $this->buildUrlQuery($this->urlParameterQuery);
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::DELETE;
    }


    /**
     * @return string
     */
    public function getBody()
    {
        return '';
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 204;
    }
}
