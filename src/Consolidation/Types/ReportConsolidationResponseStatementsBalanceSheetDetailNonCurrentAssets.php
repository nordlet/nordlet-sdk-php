<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportConsolidationResponseStatementsBalanceSheetDetailNonCurrentAssets extends JsonSerializableType
{
    /**
     * @var string $intangible
     */
    #[JsonProperty('intangible')]
    public string $intangible;

    /**
     * @var string $tangible
     */
    #[JsonProperty('tangible')]
    public string $tangible;

    /**
     * @var string $financial
     */
    #[JsonProperty('financial')]
    public string $financial;

    /**
     * @var string $other
     */
    #[JsonProperty('other')]
    public string $other;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   intangible: string,
     *   tangible: string,
     *   financial: string,
     *   other: string,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->intangible = $values['intangible'];
        $this->tangible = $values['tangible'];
        $this->financial = $values['financial'];
        $this->other = $values['other'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
