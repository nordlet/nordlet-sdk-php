<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuSmeThresholdGetDeclarationsResponseThreshold extends JsonSerializableType
{
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
     * @var ?array<EuSmeThresholdGetDeclarationsResponseThresholdSectorsItem> $sectors
     */
    #[JsonProperty('sectors'), ArrayType([EuSmeThresholdGetDeclarationsResponseThresholdSectorsItem::class])]
    public ?array $sectors;

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
     *   currency: string,
     *   source: string,
     *   nationalThreshold?: ?string,
     *   sectors?: ?array<EuSmeThresholdGetDeclarationsResponseThresholdSectorsItem>,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currency = $values['currency'];
        $this->nationalThreshold = $values['nationalThreshold'] ?? null;
        $this->sectors = $values['sectors'] ?? null;
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
