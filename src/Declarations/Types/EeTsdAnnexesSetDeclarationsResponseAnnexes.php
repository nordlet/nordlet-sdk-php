<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EeTsdAnnexesSetDeclarationsResponseAnnexes extends JsonSerializableType
{
    /**
     * @var ?array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex4Item> $annex4
     */
    #[JsonProperty('annex4'), ArrayType([EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex4Item::class])]
    public ?array $annex4;

    /**
     * @var ?array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex5Item> $annex5
     */
    #[JsonProperty('annex5'), ArrayType([EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex5Item::class])]
    public ?array $annex5;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6 $annex6
     */
    #[JsonProperty('annex6')]
    public ?EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6 $annex6;

    /**
     * @var string $incomeTax Added to code 114; negative when annex 5 or 6 gives back more than the annexes add
     */
    #[JsonProperty('incomeTax')]
    public string $incomeTax;

    /**
     * @var string $socialTax Code 4180, added to code 115
     */
    #[JsonProperty('socialTax')]
    public string $socialTax;

    /**
     * @param array{
     *   incomeTax: string,
     *   socialTax: string,
     *   annex4?: ?array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex4Item>,
     *   annex5?: ?array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex5Item>,
     *   annex6?: ?EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->annex4 = $values['annex4'] ?? null;
        $this->annex5 = $values['annex5'] ?? null;
        $this->annex6 = $values['annex6'] ?? null;
        $this->incomeTax = $values['incomeTax'];
        $this->socialTax = $values['socialTax'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
