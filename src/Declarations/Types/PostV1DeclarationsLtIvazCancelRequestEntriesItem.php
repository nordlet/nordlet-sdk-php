<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtIvazCancelRequestEntriesItem extends JsonSerializableType
{
    /**
     * @var string $waybillId
     */
    #[JsonProperty('waybillId')]
    public string $waybillId;

    /**
     * @var value-of<PostV1DeclarationsLtIvazCancelRequestEntriesItemReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var ?string $additionalInfo
     */
    #[JsonProperty('additionalInfo')]
    public ?string $additionalInfo;

    /**
     * @param array{
     *   waybillId: string,
     *   reason: value-of<PostV1DeclarationsLtIvazCancelRequestEntriesItemReason>,
     *   additionalInfo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->waybillId = $values['waybillId'];
        $this->reason = $values['reason'];
        $this->additionalInfo = $values['additionalInfo'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
