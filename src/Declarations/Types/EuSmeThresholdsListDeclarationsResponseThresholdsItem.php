<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuSmeThresholdsListDeclarationsResponseThresholdsItem extends JsonSerializableType
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
     * @var ?array<EuSmeThresholdsListDeclarationsResponseThresholdsItemSectorsItem> $sectors
     */
    #[JsonProperty('sectors'), ArrayType([EuSmeThresholdsListDeclarationsResponseThresholdsItemSectorsItem::class])]
    public ?array $sectors;

    /**
     * @var ?EuSmeThresholdsListDeclarationsResponseThresholdsItemIntraEuAcquisitionsTrigger $intraEuAcquisitionsTrigger
     */
    #[JsonProperty('intraEuAcquisitionsTrigger')]
    public ?EuSmeThresholdsListDeclarationsResponseThresholdsItemIntraEuAcquisitionsTrigger $intraEuAcquisitionsTrigger;

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
     *   sectors?: ?array<EuSmeThresholdsListDeclarationsResponseThresholdsItemSectorsItem>,
     *   intraEuAcquisitionsTrigger?: ?EuSmeThresholdsListDeclarationsResponseThresholdsItemIntraEuAcquisitionsTrigger,
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
