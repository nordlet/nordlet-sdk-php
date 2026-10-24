<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DebtRemindersSettingsGetPartnersResponse extends JsonSerializableType
{
    /**
     * @var ?int $daysBefore
     */
    #[JsonProperty('daysBefore')]
    public ?int $daysBefore;

    /**
     * @var int $repeatDays
     */
    #[JsonProperty('repeatDays')]
    public int $repeatDays;

    /**
     * @param array{
     *   repeatDays: int,
     *   daysBefore?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->daysBefore = $values['daysBefore'] ?? null;
        $this->repeatDays = $values['repeatDays'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
