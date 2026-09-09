<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LeadsConvertResponse extends JsonSerializableType
{
    /**
     * @var PostV1LeadsConvertResponseLead $lead
     */
    #[JsonProperty('lead')]
    public PostV1LeadsConvertResponseLead $lead;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @param array{
     *   lead: PostV1LeadsConvertResponseLead,
     *   partnerId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->lead = $values['lead'];
        $this->partnerId = $values['partnerId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
