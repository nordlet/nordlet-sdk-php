<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\TaxPaymentsCreateDeclarationsRequestTax;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\TaxPaymentsCreateDeclarationsRequestKind;
use DateTime;
use Nordlet\Core\Types\Date;

class TaxPaymentsCreateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var value-of<TaxPaymentsCreateDeclarationsRequestTax> $tax
     */
    #[JsonProperty('tax')]
    public string $tax;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var ?int $month
     */
    #[JsonProperty('month')]
    public ?int $month;

    /**
     * @var value-of<TaxPaymentsCreateDeclarationsRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var DateTime $paidOn
     */
    #[JsonProperty('paidOn'), Date(Date::TYPE_DATE)]
    public DateTime $paidOn;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @param array{
     *   tax: value-of<TaxPaymentsCreateDeclarationsRequestTax>,
     *   year: int,
     *   kind: value-of<TaxPaymentsCreateDeclarationsRequestKind>,
     *   amount: string,
     *   paidOn: DateTime,
     *   description: string,
     *   month?: ?int,
     *   reference?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tax = $values['tax'];
        $this->year = $values['year'];
        $this->month = $values['month'] ?? null;
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->paidOn = $values['paidOn'];
        $this->reference = $values['reference'] ?? null;
        $this->description = $values['description'];
    }
}
