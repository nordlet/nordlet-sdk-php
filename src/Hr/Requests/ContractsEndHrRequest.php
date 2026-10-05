<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ContractsEndHrRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public DateTime $endDate;

    /**
     * @var ?string $endReason
     */
    #[JsonProperty('endReason')]
    public ?string $endReason;

    /**
     * @param array{
     *   id: string,
     *   endDate: DateTime,
     *   endReason?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->endDate = $values['endDate'];
        $this->endReason = $values['endReason'] ?? null;
    }
}
