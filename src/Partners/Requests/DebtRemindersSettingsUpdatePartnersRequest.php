<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DebtRemindersSettingsUpdatePartnersRequest extends JsonSerializableType
{
    /**
     * @var ?int $daysBefore
     */
    #[JsonProperty('daysBefore')]
    public ?int $daysBefore;

    /**
     * @var ?int $repeatDays
     */
    #[JsonProperty('repeatDays')]
    public ?int $repeatDays;

    /**
     * @param array{
     *   daysBefore?: ?int,
     *   repeatDays?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->daysBefore = $values['daysBefore'] ?? null;
        $this->repeatDays = $values['repeatDays'] ?? null;
    }
}
