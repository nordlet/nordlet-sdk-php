<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvoicesPeppolStatusSalesResponse extends JsonSerializableType
{
    /**
     * @var string $messageId
     */
    #[JsonProperty('messageId')]
    public string $messageId;

    /**
     * @var value-of<InvoicesPeppolStatusSalesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @var DateTime $checkedAt
     */
    #[JsonProperty('checkedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $checkedAt;

    /**
     * @param array{
     *   messageId: string,
     *   status: value-of<InvoicesPeppolStatusSalesResponseStatus>,
     *   checkedAt: DateTime,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messageId = $values['messageId'];
        $this->status = $values['status'];
        $this->detail = $values['detail'] ?? null;
        $this->checkedAt = $values['checkedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
