<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweekStart extends JsonSerializableType
{
    /**
     * @var string $day
     */
    #[JsonProperty('day')]
    public string $day;

    /**
     * @var ?string $time
     */
    #[JsonProperty('time')]
    public ?string $time;

    /**
     * @param array{
     *   day: string,
     *   time?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->day = $values['day'];
        $this->time = $values['time'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
