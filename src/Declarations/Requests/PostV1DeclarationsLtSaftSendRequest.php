<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsLtSaftSendRequestDataType;

class PostV1DeclarationsLtSaftSendRequest extends JsonSerializableType
{
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
     * @var ?value-of<PostV1DeclarationsLtSaftSendRequestDataType> $dataType
     */
    #[JsonProperty('dataType')]
    public ?string $dataType;

    /**
     * @var ?bool $confirm
     */
    #[JsonProperty('confirm')]
    public ?bool $confirm;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   dataType?: ?value-of<PostV1DeclarationsLtSaftSendRequestDataType>,
     *   confirm?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->dataType = $values['dataType'] ?? null;
        $this->confirm = $values['confirm'] ?? null;
    }
}
