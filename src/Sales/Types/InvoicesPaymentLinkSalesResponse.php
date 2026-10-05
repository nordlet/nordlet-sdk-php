<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesPaymentLinkSalesResponse extends JsonSerializableType
{
    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?value-of<InvoicesPaymentLinkSalesResponseSource> $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   url?: ?string,
     *   source?: ?value-of<InvoicesPaymentLinkSalesResponseSource>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->url = $values['url'] ?? null;
        $this->source = $values['source'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
