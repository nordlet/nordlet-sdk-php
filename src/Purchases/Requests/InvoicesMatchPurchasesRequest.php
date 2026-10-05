<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesMatchPurchasesRequest extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var ?string $priceTolerancePercent
     */
    #[JsonProperty('priceTolerancePercent')]
    public ?string $priceTolerancePercent;

    /**
     * @param array{
     *   invoiceId: string,
     *   priceTolerancePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->priceTolerancePercent = $values['priceTolerancePercent'] ?? null;
    }
}
