<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var EeTsdAnnexesGetDeclarationsResponseInput $input
     */
    #[JsonProperty('input')]
    public EeTsdAnnexesGetDeclarationsResponseInput $input;

    /**
     * @var ?EeTsdAnnexesGetDeclarationsResponseAnnexes $annexes
     */
    #[JsonProperty('annexes')]
    public ?EeTsdAnnexesGetDeclarationsResponseAnnexes $annexes;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   input: EeTsdAnnexesGetDeclarationsResponseInput,
     *   annexes?: ?EeTsdAnnexesGetDeclarationsResponseAnnexes,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->input = $values['input'];
        $this->annexes = $values['annexes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
