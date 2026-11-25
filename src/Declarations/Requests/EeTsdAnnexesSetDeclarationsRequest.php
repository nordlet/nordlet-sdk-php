<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\EeTsdAnnexesSetDeclarationsRequestAnnex4;
use Nordlet\Declarations\Types\EeTsdAnnexesSetDeclarationsRequestAnnex5;
use Nordlet\Declarations\Types\EeTsdAnnexesSetDeclarationsRequestAnnex6;

class EeTsdAnnexesSetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsRequestAnnex4 $annex4
     */
    #[JsonProperty('annex4')]
    public ?EeTsdAnnexesSetDeclarationsRequestAnnex4 $annex4;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsRequestAnnex5 $annex5
     */
    #[JsonProperty('annex5')]
    public ?EeTsdAnnexesSetDeclarationsRequestAnnex5 $annex5;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsRequestAnnex6 $annex6
     */
    #[JsonProperty('annex6')]
    public ?EeTsdAnnexesSetDeclarationsRequestAnnex6 $annex6;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   annex4?: ?EeTsdAnnexesSetDeclarationsRequestAnnex4,
     *   annex5?: ?EeTsdAnnexesSetDeclarationsRequestAnnex5,
     *   annex6?: ?EeTsdAnnexesSetDeclarationsRequestAnnex6,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->annex4 = $values['annex4'] ?? null;
        $this->annex5 = $values['annex5'] ?? null;
        $this->annex6 = $values['annex6'] ?? null;
    }
}
