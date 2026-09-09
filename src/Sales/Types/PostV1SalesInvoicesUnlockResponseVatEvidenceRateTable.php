<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesUnlockResponseVatEvidenceRateTable extends JsonSerializableType
{
    /**
     * @var string $importId
     */
    #[JsonProperty('importId')]
    public string $importId;

    /**
     * @var string $situationOn
     */
    #[JsonProperty('situationOn')]
    public string $situationOn;

    /**
     * @var string $trigger
     */
    #[JsonProperty('trigger')]
    public string $trigger;

    /**
     * @var string $startedAt
     */
    #[JsonProperty('startedAt')]
    public string $startedAt;

    /**
     * @param array{
     *   importId: string,
     *   situationOn: string,
     *   trigger: string,
     *   startedAt: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->importId = $values['importId'];
        $this->situationOn = $values['situationOn'];
        $this->trigger = $values['trigger'];
        $this->startedAt = $values['startedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
