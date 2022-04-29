<?php
namespace Getresponse\Sdk\Operation\SubscriptionConfirmations\Subject\GetSubject;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSubject extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/subscription-confirmations/subject/{languageCode}';

    private ?\Getresponse\Sdk\Operation\SubscriptionConfirmations\Subject\GetSubject\GetSubjectFields $fields = null;


    /**
     * @param string $languageCode
     */
    public function __construct(private $languageCode)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{languageCode}'],
            [$this->languageCode],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetSubjectFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
