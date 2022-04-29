<?php
namespace Getresponse\Sdk\Operation\ClickTracks\GetClickTrack;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetClickTrack extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/click-tracks/{clickTrackId}';

    private ?\Getresponse\Sdk\Operation\ClickTracks\GetClickTrack\GetClickTrackFields $fields = null;


    /**
     * @param string $clickTrackId
     */
    public function __construct(private $clickTrackId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{clickTrackId}'],
            [$this->clickTrackId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetClickTrackFields $fields)
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
