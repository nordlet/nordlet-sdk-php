<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesSetDeclarationsResponseInput extends JsonSerializableType
{
    /**
     * @var ?EeTsdAnnexesSetDeclarationsResponseInputAnnex4 $annex4
     */
    #[JsonProperty('annex4')]
    public ?EeTsdAnnexesSetDeclarationsResponseInputAnnex4 $annex4;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsResponseInputAnnex5 $annex5
     */
    #[JsonProperty('annex5')]
    public ?EeTsdAnnexesSetDeclarationsResponseInputAnnex5 $annex5;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsResponseInputAnnex6 $annex6
     */
    #[JsonProperty('annex6')]
    public ?EeTsdAnnexesSetDeclarationsResponseInputAnnex6 $annex6;

    /**
     * @param array{
     *   annex4?: ?EeTsdAnnexesSetDeclarationsResponseInputAnnex4,
     *   annex5?: ?EeTsdAnnexesSetDeclarationsResponseInputAnnex5,
     *   annex6?: ?EeTsdAnnexesSetDeclarationsResponseInputAnnex6,
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
