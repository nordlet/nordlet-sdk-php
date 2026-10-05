<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesEinvoiceStatusSalesResponse extends JsonSerializableType
{
    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var value-of<InvoicesEinvoiceStatusSalesResponseTransport> $transport
     */
    #[JsonProperty('transport')]
    public string $transport;

    /**
     * @var string $messageId
     */
    #[JsonProperty('messageId')]
    public string $messageId;

    /**
     * @var ?string $nationalNumber
     */
    #[JsonProperty('nationalNumber')]
    public ?string $nationalNumber;

    /**
     * @var value-of<InvoicesEinvoiceStatusSalesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @param array{
     *   system: string,
     *   transport: value-of<InvoicesEinvoiceStatusSalesResponseTransport>,
     *   messageId: string,
     *   status: value-of<InvoicesEinvoiceStatusSalesResponseStatus>,
     *   nationalNumber?: ?string,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->system = $values['system'];
        $this->transport = $values['transport'];
        $this->messageId = $values['messageId'];
        $this->nationalNumber = $values['nationalNumber'] ?? null;
        $this->status = $values['status'];
        $this->detail = $values['detail'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
