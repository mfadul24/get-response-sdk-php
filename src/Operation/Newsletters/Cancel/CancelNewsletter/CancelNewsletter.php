<?php
namespace Getresponse\Sdk\Operation\Newsletters\Cancel\CancelNewsletter;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class CancelNewsletter extends CommandOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/newsletters/{newsletterId}/cancel';


    /**
     * @param string $newsletterId
     */
    public function __construct(private $newsletterId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{newsletterId}'],
            [$this->newsletterId],
            self::METHOD_URL
        );
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate();
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::POST;
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
        return 200;
    }
}
