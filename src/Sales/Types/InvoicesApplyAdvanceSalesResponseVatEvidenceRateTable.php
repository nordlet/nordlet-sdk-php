<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvoicesApplyAdvanceSalesResponseVatEvidenceRateTable extends JsonSerializableType
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
     * @var DateTime $startedAt
     */
    #[JsonProperty('startedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $startedAt;

    /**
     * @param array{
     *   importId: string,
     *   situationOn: string,
     *   trigger: string,
     *   startedAt: DateTime,
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
