<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TransactionsSuggestMatchesBankResponseSuggestionsItem extends JsonSerializableType
{
    /**
     * @var value-of<TransactionsSuggestMatchesBankResponseSuggestionsItemDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var string $documentId
     */
    #[JsonProperty('documentId')]
    public string $documentId;

    /**
     * @var string $number
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $remaining
     */
    #[JsonProperty('remaining')]
    public string $remaining;

    /**
     * @var int $score
     */
    #[JsonProperty('score')]
    public int $score;

    /**
     * @var array<string> $reasons
     */
    #[JsonProperty('reasons'), ArrayType(['string'])]
    public array $reasons;

    /**
     * @param array{
     *   documentType: value-of<TransactionsSuggestMatchesBankResponseSuggestionsItemDocumentType>,
     *   documentId: string,
     *   number: string,
     *   partnerName: string,
     *   currency: string,
     *   grossTotal: string,
     *   remaining: string,
     *   score: int,
     *   reasons: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentType = $values['documentType'];
        $this->documentId = $values['documentId'];
        $this->number = $values['number'];
        $this->partnerName = $values['partnerName'];
        $this->currency = $values['currency'];
        $this->grossTotal = $values['grossTotal'];
        $this->remaining = $values['remaining'];
        $this->score = $values['score'];
        $this->reasons = $values['reasons'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
