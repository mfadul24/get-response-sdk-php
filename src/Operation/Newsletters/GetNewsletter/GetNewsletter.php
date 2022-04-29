<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletter;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetNewsletter extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/newsletters/{newsletterId}';

    private ?\Getresponse\Sdk\Operation\Newsletters\GetNewsletter\GetNewsletterFields $fields = null;


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
     * @return $this
     */
    public function setFields(GetNewsletterFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
