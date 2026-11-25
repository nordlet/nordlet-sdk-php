<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesGetDeclarationsResponseInput extends JsonSerializableType
{
    /**
     * @var ?EeTsdAnnexesGetDeclarationsResponseInputAnnex4 $annex4
     */
    #[JsonProperty('annex4')]
    public ?EeTsdAnnexesGetDeclarationsResponseInputAnnex4 $annex4;

    /**
     * @var ?EeTsdAnnexesGetDeclarationsResponseInputAnnex5 $annex5
     */
    #[JsonProperty('annex5')]
    public ?EeTsdAnnexesGetDeclarationsResponseInputAnnex5 $annex5;

    /**
     * @var ?EeTsdAnnexesGetDeclarationsResponseInputAnnex6 $annex6
     */
    #[JsonProperty('annex6')]
    public ?EeTsdAnnexesGetDeclarationsResponseInputAnnex6 $annex6;

    /**
     * @param array{
     *   annex4?: ?EeTsdAnnexesGetDeclarationsResponseInputAnnex4,
     *   annex5?: ?EeTsdAnnexesGetDeclarationsResponseInputAnnex5,
     *   annex6?: ?EeTsdAnnexesGetDeclarationsResponseInputAnnex6,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->annex4 = $values['annex4'] ?? null;
        $this->annex5 = $values['annex5'] ?? null;
        $this->annex6 = $values['annex6'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
