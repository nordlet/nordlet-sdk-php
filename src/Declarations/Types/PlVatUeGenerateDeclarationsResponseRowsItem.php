<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PlVatUeGenerateDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var value-of<PlVatUeGenerateDeclarationsResponseRowsItemSection> $section
     */
    #[JsonProperty('section')]
    public string $section;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $vatNumber
     */
    #[JsonProperty('vatNumber')]
    public string $vatNumber;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var array<string> $documents
     */
    #[JsonProperty('documents'), ArrayType(['string'])]
    public array $documents;

    /**
     * @param array{
     *   section: value-of<PlVatUeGenerateDeclarationsResponseRowsItemSection>,
     *   countryCode: string,
     *   vatNumber: string,
     *   partnerName: string,
     *   amount: string,
     *   documents: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->section = $values['section'];
        $this->countryCode = $values['countryCode'];
        $this->vatNumber = $values['vatNumber'];
        $this->partnerName = $values['partnerName'];
        $this->amount = $values['amount'];
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
