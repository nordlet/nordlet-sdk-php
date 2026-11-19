<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\UsDeFranchiseTaxComputeDeclarationsRequestAuthorizedSharesItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeFranchiseTaxComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var array<UsDeFranchiseTaxComputeDeclarationsRequestAuthorizedSharesItem> $authorizedShares
     */
    #[JsonProperty('authorizedShares'), ArrayType([UsDeFranchiseTaxComputeDeclarationsRequestAuthorizedSharesItem::class])]
    public array $authorizedShares;

    /**
     * @var ?int $issuedShares
     */
    #[JsonProperty('issuedShares')]
    public ?int $issuedShares;

    /**
     * @var ?string $totalGrossAssets
     */
    #[JsonProperty('totalGrossAssets')]
    public ?string $totalGrossAssets;

    /**
     * @var ?bool $largeCorporateFiler
     */
    #[JsonProperty('largeCorporateFiler')]
    public ?bool $largeCorporateFiler;

    /**
     * @param array{
     *   authorizedShares: array<UsDeFranchiseTaxComputeDeclarationsRequestAuthorizedSharesItem>,
     *   issuedShares?: ?int,
     *   totalGrossAssets?: ?string,
     *   largeCorporateFiler?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->authorizedShares = $values['authorizedShares'];
        $this->issuedShares = $values['issuedShares'] ?? null;
        $this->totalGrossAssets = $values['totalGrossAssets'] ?? null;
        $this->largeCorporateFiler = $values['largeCorporateFiler'] ?? null;
    }
}
