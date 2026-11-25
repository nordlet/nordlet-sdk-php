<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatAccountsReportsResponseDocuments extends JsonSerializableType
{
    /**
     * @var string $outputVat
     */
    #[JsonProperty('outputVat')]
    public string $outputVat;

    /**
     * @var string $ossVat
     */
    #[JsonProperty('ossVat')]
    public string $ossVat;

    /**
     * @var string $selfAssessedVat
     */
    #[JsonProperty('selfAssessedVat')]
    public string $selfAssessedVat;

    /**
     * @var string $deductibleVat
     */
    #[JsonProperty('deductibleVat')]
    public string $deductibleVat;

    /**
     * @param array{
     *   outputVat: string,
     *   ossVat: string,
     *   selfAssessedVat: string,
     *   deductibleVat: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->outputVat = $values['outputVat'];
        $this->ossVat = $values['ossVat'];
        $this->selfAssessedVat = $values['selfAssessedVat'];
        $this->deductibleVat = $values['deductibleVat'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
