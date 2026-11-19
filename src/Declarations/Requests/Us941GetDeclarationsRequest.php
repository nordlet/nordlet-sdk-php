<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class Us941GetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $quarter
     */
    #[JsonProperty('quarter')]
    public int $quarter;

    /**
     * @var ?string $deposits
     */
    #[JsonProperty('deposits')]
    public ?string $deposits;

    /**
     * @param array{
     *   year: int,
     *   quarter: int,
     *   deposits?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->quarter = $values['quarter'];
        $this->deposits = $values['deposits'] ?? null;
    }
}
