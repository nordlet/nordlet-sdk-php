<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsAnnualAccountsDistributionsUpdateRequestKind;

class PostV1DeclarationsAnnualAccountsDistributionsUpdateRequest extends JsonSerializableType
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
     * @var value-of<PostV1DeclarationsAnnualAccountsDistributionsUpdateRequestKind> $kind
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
     *   kind: value-of<PostV1DeclarationsAnnualAccountsDistributionsUpdateRequestKind>,
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
}
