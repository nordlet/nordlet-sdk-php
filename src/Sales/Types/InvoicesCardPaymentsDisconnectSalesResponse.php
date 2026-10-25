<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesCardPaymentsDisconnectSalesResponse extends JsonSerializableType
{
    /**
     * @var bool $connected
     */
    #[JsonProperty('connected')]
    public bool $connected;

    /**
     * @var bool $chargesEnabled
     */
    #[JsonProperty('chargesEnabled')]
    public bool $chargesEnabled;

    /**
     * @var ?string $accountId
     */
    #[JsonProperty('accountId')]
    public ?string $accountId;

    /**
     * @param array{
     *   connected: bool,
     *   chargesEnabled: bool,
     *   accountId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connected = $values['connected'];
        $this->chargesEnabled = $values['chargesEnabled'];
        $this->accountId = $values['accountId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
