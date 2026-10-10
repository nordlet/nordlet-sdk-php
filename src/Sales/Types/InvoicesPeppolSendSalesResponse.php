<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesPeppolSendSalesResponse extends JsonSerializableType
{
    /**
     * @var bool $sent
     */
    #[JsonProperty('sent')]
    public bool $sent;

    /**
     * @var string $messageId
     */
    #[JsonProperty('messageId')]
    public string $messageId;

    /**
     * @var string $receiverId
     */
    #[JsonProperty('receiverId')]
    public string $receiverId;

    /**
     * @var value-of<InvoicesPeppolSendSalesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @var ?string $fileId
     */
    #[JsonProperty('fileId')]
    public ?string $fileId;

    /**
     * @param array{
     *   sent: bool,
     *   messageId: string,
     *   receiverId: string,
     *   status: value-of<InvoicesPeppolSendSalesResponseStatus>,
     *   detail?: ?string,
     *   fileId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sent = $values['sent'];
        $this->messageId = $values['messageId'];
        $this->receiverId = $values['receiverId'];
        $this->status = $values['status'];
        $this->detail = $values['detail'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
