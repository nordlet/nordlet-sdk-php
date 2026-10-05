<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItSdiPurchasePreviewDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var value-of<ItSdiPurchasePreviewDeclarationsResponseTipoDocumento> $tipoDocumento
     */
    #[JsonProperty('tipoDocumento')]
    public string $tipoDocumento;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $contentType
     */
    #[JsonProperty('contentType')]
    public string $contentType;

    /**
     * @var string $data
     */
    #[JsonProperty('data')]
    public string $data;

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
     *   tipoDocumento: value-of<ItSdiPurchasePreviewDeclarationsResponseTipoDocumento>,
     *   fileName: string,
     *   contentType: string,
     *   data: string,
     *   net: string,
     *   vat: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tipoDocumento = $values['tipoDocumento'];
        $this->fileName = $values['fileName'];
        $this->contentType = $values['contentType'];
        $this->data = $values['data'];
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
