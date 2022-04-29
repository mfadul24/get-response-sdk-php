<?php
namespace Getresponse\Sdk\Operation\Autoresponders\Thumbnail\GetAutoresponderThumbnail;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAutoresponderThumbnail extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/autoresponders/{autoresponderId}/thumbnail';

    private ?\Getresponse\Sdk\Operation\Autoresponders\Thumbnail\GetAutoresponderThumbnail\GetAutoresponderThumbnailUrlQueryParameters $urlParameterQuery = null;


    /**
     * @param string $autoresponderId
     */
    public function __construct(private $autoresponderId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{autoresponderId}'],
            [$this->autoresponderId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setUrlParameterQuery(GetAutoresponderThumbnailUrlQueryParameters $urlParameterQuery)
    {
        $this->urlParameterQuery = $urlParameterQuery;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = null !== $this->urlParameterQuery ? $this->urlParameterQuery->toArray() : [];
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
