<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesPaymentSettingsUpdateSalesRequest extends JsonSerializableType
{
    /**
     * @var ?string $paymentLinkTemplate
     */
    #[JsonProperty('paymentLinkTemplate')]
    public ?string $paymentLinkTemplate;

    /**
     * @param array{
     *   paymentLinkTemplate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->paymentLinkTemplate = $values['paymentLinkTemplate'] ?? null;
    }
}
