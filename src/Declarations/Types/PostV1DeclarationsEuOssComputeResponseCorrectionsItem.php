<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuOssComputeResponseCorrectionsItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var int $periodYear
     */
    #[JsonProperty('periodYear')]
    public int $periodYear;

    /**
     * @var ?int $periodQuarter
     */
    #[JsonProperty('periodQuarter')]
    public ?int $periodQuarter;

    /**
     * @var ?int $periodMonth
     */
    #[JsonProperty('periodMonth')]
    public ?int $periodMonth;

    /**
     * @var string $taxableAmount
     */
    #[JsonProperty('taxableAmount')]
    public string $taxableAmount;

    /**
     * @var string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public string $vatAmount;

    /**
     * @var int $documents
     */
    #[JsonProperty('documents')]
    public int $documents;

    /**
     * @param array{
     *   countryCode: string,
     *   periodYear: int,
     *   taxableAmount: string,
     *   vatAmount: string,
     *   documents: int,
     *   periodQuarter?: ?int,
     *   periodMonth?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->periodYear = $values['periodYear'];
        $this->periodQuarter = $values['periodQuarter'] ?? null;
        $this->periodMonth = $values['periodMonth'] ?? null;
        $this->taxableAmount = $values['taxableAmount'];
        $this->vatAmount = $values['vatAmount'];
        $this->documents = $values['documents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
