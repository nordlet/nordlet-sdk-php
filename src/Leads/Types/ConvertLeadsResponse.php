<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ConvertLeadsResponse extends JsonSerializableType
{
    /**
     * @var ConvertLeadsResponseLead $lead
     */
    #[JsonProperty('lead')]
    public ConvertLeadsResponseLead $lead;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @param array{
     *   lead: ConvertLeadsResponseLead,
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
