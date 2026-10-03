<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsAnnualAccountsDistributionsCreateRequestKind;

class PostV1DeclarationsAnnualAccountsDistributionsCreateRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $decidedOn
     */
    #[JsonProperty('decidedOn')]
    public string $decidedOn;

    /**
     * @var value-of<PostV1DeclarationsAnnualAccountsDistributionsCreateRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   year: int,
     *   decidedOn: string,
     *   kind: value-of<PostV1DeclarationsAnnualAccountsDistributionsCreateRequestKind>,
     *   amount: string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->decidedOn = $values['decidedOn'];
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->description = $values['description'] ?? null;
    }
}
