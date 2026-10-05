<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\TaxPaymentsUpdateDeclarationsRequestKind;
use DateTime;
use Nordlet\Core\Types\Date;

class TaxPaymentsUpdateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<TaxPaymentsUpdateDeclarationsRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public ?string $kind;

    /**
     * @var ?string $amount
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * @var ?DateTime $paidOn
     */
    #[JsonProperty('paidOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $paidOn;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   id: string,
     *   kind?: ?value-of<TaxPaymentsUpdateDeclarationsRequestKind>,
     *   amount?: ?string,
     *   paidOn?: ?DateTime,
     *   reference?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->kind = $values['kind'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->paidOn = $values['paidOn'] ?? null;
        $this->reference = $values['reference'] ?? null;
        $this->description = $values['description'] ?? null;
    }
}
