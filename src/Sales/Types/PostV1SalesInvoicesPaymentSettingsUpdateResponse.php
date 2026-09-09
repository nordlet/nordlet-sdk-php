<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesPaymentSettingsUpdateResponse extends JsonSerializableType
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
