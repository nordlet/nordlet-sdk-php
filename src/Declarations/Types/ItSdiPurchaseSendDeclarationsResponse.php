<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItSdiPurchaseSendDeclarationsResponse extends JsonSerializableType
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
     * @var value-of<ItSdiPurchaseSendDeclarationsResponseTransport> $transport
     */
    #[JsonProperty('transport')]
    public string $transport;

    /**
     * @var value-of<ItSdiPurchaseSendDeclarationsResponseTipoDocumento> $tipoDocumento
     */
    #[JsonProperty('tipoDocumento')]
    public string $tipoDocumento;

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
     * @var value-of<ItSdiPurchaseSendDeclarationsResponseStatus> $status
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
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var string $vat
     */
    #[JsonProperty('vat')]
    public string $vat;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   sent: bool,
     *   system: string,
     *   transport: value-of<ItSdiPurchaseSendDeclarationsResponseTransport>,
     *   tipoDocumento: value-of<ItSdiPurchaseSendDeclarationsResponseTipoDocumento>,
     *   messageId: string,
     *   status: value-of<ItSdiPurchaseSendDeclarationsResponseStatus>,
     *   fileId: string,
     *   net: string,
     *   vat: string,
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
        $this->transport = $values['transport'];
        $this->tipoDocumento = $values['tipoDocumento'];
        $this->messageId = $values['messageId'];
        $this->nationalNumber = $values['nationalNumber'] ?? null;
        $this->status = $values['status'];
        $this->detail = $values['detail'] ?? null;
        $this->fileId = $values['fileId'];
        $this->net = $values['net'];
        $this->vat = $values['vat'];
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
