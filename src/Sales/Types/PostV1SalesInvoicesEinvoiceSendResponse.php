<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesEinvoiceSendResponse extends JsonSerializableType
{
    /**
     * @var bool $sent
     */
    #[JsonProperty('sent')]
    public bool $sent;

    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var string $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var value-of<PostV1SalesInvoicesEinvoiceSendResponseTransport> $transport
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
     * @var value-of<PostV1SalesInvoicesEinvoiceSendResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @var string $fileId
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   sent: bool,
     *   system: string,
     *   format: string,
     *   transport: value-of<PostV1SalesInvoicesEinvoiceSendResponseTransport>,
     *   messageId: string,
     *   status: value-of<PostV1SalesInvoicesEinvoiceSendResponseStatus>,
     *   fileId: string,
     *   warnings: array<string>,
     *   nationalNumber?: ?string,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sent = $values['sent'];
        $this->system = $values['system'];
        $this->format = $values['format'];
        $this->transport = $values['transport'];
        $this->messageId = $values['messageId'];
        $this->nationalNumber = $values['nationalNumber'] ?? null;
        $this->status = $values['status'];
        $this->detail = $values['detail'] ?? null;
        $this->fileId = $values['fileId'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
