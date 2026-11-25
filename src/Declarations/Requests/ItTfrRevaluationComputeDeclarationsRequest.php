<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\ItTfrRevaluationComputeDeclarationsRequestFundsItem;
use Nordlet\Core\Types\ArrayType;

class ItTfrRevaluationComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $foiPreviousDecember
     */
    #[JsonProperty('foiPreviousDecember')]
    public string $foiPreviousDecember;

    /**
     * @var string $foiDecember
     */
    #[JsonProperty('foiDecember')]
    public string $foiDecember;

    /**
     * @var array<ItTfrRevaluationComputeDeclarationsRequestFundsItem> $funds
     */
    #[JsonProperty('funds'), ArrayType([ItTfrRevaluationComputeDeclarationsRequestFundsItem::class])]
    public array $funds;

    /**
     * @param array{
     *   year: int,
     *   foiPreviousDecember: string,
     *   foiDecember: string,
     *   funds: array<ItTfrRevaluationComputeDeclarationsRequestFundsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->foiPreviousDecember = $values['foiPreviousDecember'];
        $this->foiDecember = $values['foiDecember'];
        $this->funds = $values['funds'];
    }
}
