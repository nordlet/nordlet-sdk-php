<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Declarations\Types\AnnualAccountsDistributionsCreateDeclarationsRequestKind;

class AnnualAccountsDistributionsCreateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var DateTime $decidedOn
     */
    #[JsonProperty('decidedOn'), Date(Date::TYPE_DATE)]
    public DateTime $decidedOn;

    /**
     * @var value-of<AnnualAccountsDistributionsCreateDeclarationsRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   year: int,
     *   decidedOn: DateTime,
     *   kind: value-of<AnnualAccountsDistributionsCreateDeclarationsRequestKind>,
     *   amount: string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->decidedOn = $values['decidedOn'];
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->description = $values['description'] ?? null;
    }
}
