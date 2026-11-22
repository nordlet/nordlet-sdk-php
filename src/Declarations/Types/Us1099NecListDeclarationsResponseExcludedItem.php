<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class Us1099NecListDeclarationsResponseExcludedItem extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $paid
     */
    #[JsonProperty('paid')]
    public string $paid;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @param array{
     *   partnerId: string,
     *   name: string,
     *   paid: string,
     *   reason: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->name = $values['name'];
        $this->paid = $values['paid'];
        $this->reason = $values['reason'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
