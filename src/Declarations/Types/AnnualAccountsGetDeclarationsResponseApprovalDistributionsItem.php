<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AnnualAccountsGetDeclarationsResponseApprovalDistributionsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $decidedOn
     */
    #[JsonProperty('decidedOn')]
    public string $decidedOn;

    /**
     * @var value-of<AnnualAccountsGetDeclarationsResponseApprovalDistributionsItemKind> $kind
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
     *   id: string,
     *   decidedOn: string,
     *   kind: value-of<AnnualAccountsGetDeclarationsResponseApprovalDistributionsItemKind>,
     *   amount: string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->decidedOn = $values['decidedOn'];
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
