<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\PostV1DeclarationsLtSdGenerateRequestType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtSdGenerateRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsLtSdGenerateRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @param array{
     *   type: value-of<PostV1DeclarationsLtSdGenerateRequestType>,
     *   fromDate: string,
     *   toDate: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
    }
}
