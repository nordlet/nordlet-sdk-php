<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsItSdiPurchasePreviewRequestTipoDocumento;

class PostV1DeclarationsItSdiPurchasePreviewRequest extends JsonSerializableType
{
    /**
     * @var string $purchaseInvoiceId
     */
    #[JsonProperty('purchaseInvoiceId')]
    public string $purchaseInvoiceId;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?value-of<PostV1DeclarationsItSdiPurchasePreviewRequestTipoDocumento> $tipoDocumento
     */
    #[JsonProperty('tipoDocumento')]
    public ?string $tipoDocumento;

    /**
     * @param array{
     *   purchaseInvoiceId: string,
     *   vatRatePercent?: ?string,
     *   tipoDocumento?: ?value-of<PostV1DeclarationsItSdiPurchasePreviewRequestTipoDocumento>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->purchaseInvoiceId = $values['purchaseInvoiceId'];
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->tipoDocumento = $values['tipoDocumento'] ?? null;
    }
}
