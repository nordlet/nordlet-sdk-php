<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $nationalThreshold
     */
    #[JsonProperty('nationalThreshold')]
    public ?string $nationalThreshold;

    /**
     * @var ?array<PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItemSectorsItem> $sectors
     */
    #[JsonProperty('sectors'), ArrayType([PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItemSectorsItem::class])]
    public ?array $sectors;

    /**
     * @var ?PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItemIntraEuAcquisitionsTrigger $intraEuAcquisitionsTrigger
     */
    #[JsonProperty('intraEuAcquisitionsTrigger')]
    public ?PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItemIntraEuAcquisitionsTrigger $intraEuAcquisitionsTrigger;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   countryCode: string,
     *   currency: string,
     *   source: string,
     *   nationalThreshold?: ?string,
     *   sectors?: ?array<PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItemSectorsItem>,
     *   intraEuAcquisitionsTrigger?: ?PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItemIntraEuAcquisitionsTrigger,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->currency = $values['currency'];
        $this->nationalThreshold = $values['nationalThreshold'] ?? null;
        $this->sectors = $values['sectors'] ?? null;
        $this->intraEuAcquisitionsTrigger = $values['intraEuAcquisitionsTrigger'] ?? null;
        $this->note = $values['note'] ?? null;
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
