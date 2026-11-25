<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\ItTfrRevaluationPostDeclarationsRequestFundsItem;
use Nordlet\Core\Types\ArrayType;

class ItTfrRevaluationPostDeclarationsRequest extends JsonSerializableType
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
     * @var array<ItTfrRevaluationPostDeclarationsRequestFundsItem> $funds
     */
    #[JsonProperty('funds'), ArrayType([ItTfrRevaluationPostDeclarationsRequestFundsItem::class])]
    public array $funds;

    /**
     * @var string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public string $expenseAccountCode;

    /**
     * @var string $fundAccountCode
     */
    #[JsonProperty('fundAccountCode')]
    public string $fundAccountCode;

    /**
     * @var string $taxAccountCode
     */
    #[JsonProperty('taxAccountCode')]
    public string $taxAccountCode;

    /**
     * @param array{
     *   year: int,
     *   foiPreviousDecember: string,
     *   foiDecember: string,
     *   funds: array<ItTfrRevaluationPostDeclarationsRequestFundsItem>,
     *   expenseAccountCode: string,
     *   fundAccountCode: string,
     *   taxAccountCode: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->foiPreviousDecember = $values['foiPreviousDecember'];
        $this->foiDecember = $values['foiDecember'];
        $this->funds = $values['funds'];
        $this->expenseAccountCode = $values['expenseAccountCode'];
        $this->fundAccountCode = $values['fundAccountCode'];
        $this->taxAccountCode = $values['taxAccountCode'];
    }
}
