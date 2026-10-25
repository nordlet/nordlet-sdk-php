<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesViewSalesResponseBuyer extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var InvoicesViewSalesResponseBuyerAddress $address
     */
    #[JsonProperty('address')]
    public InvoicesViewSalesResponseBuyerAddress $address;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @param array{
     *   name: string,
     *   address: InvoicesViewSalesResponseBuyerAddress,
     *   vatCode?: ?string,
     *   email?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->vatCode = $values['vatCode'] ?? null;
        $this->address = $values['address'];
        $this->email = $values['email'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
