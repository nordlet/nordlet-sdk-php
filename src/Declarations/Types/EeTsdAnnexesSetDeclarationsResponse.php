<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesSetDeclarationsResponse extends JsonSerializableType
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
     * @var EeTsdAnnexesSetDeclarationsResponseInput $input
     */
    #[JsonProperty('input')]
    public EeTsdAnnexesSetDeclarationsResponseInput $input;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsResponseAnnexes $annexes
     */
    #[JsonProperty('annexes')]
    public ?EeTsdAnnexesSetDeclarationsResponseAnnexes $annexes;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   input: EeTsdAnnexesSetDeclarationsResponseInput,
     *   annexes?: ?EeTsdAnnexesSetDeclarationsResponseAnnexes,
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
