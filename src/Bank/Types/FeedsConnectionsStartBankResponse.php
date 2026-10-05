<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class FeedsConnectionsStartBankResponse extends JsonSerializableType
{
    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $expiresAt;

    /**
     * @param array{
     *   connectionId: string,
     *   reference: string,
     *   url: string,
     *   expiresAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connectionId = $values['connectionId'];
        $this->reference = $values['reference'];
        $this->url = $values['url'];
        $this->expiresAt = $values['expiresAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
