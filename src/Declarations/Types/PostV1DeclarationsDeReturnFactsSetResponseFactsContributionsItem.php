<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsSetResponseFactsContributionsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var value-of<PostV1DeclarationsDeReturnFactsSetResponseFactsContributionsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   name: string,
     *   date: string,
     *   kind: value-of<PostV1DeclarationsDeReturnFactsSetResponseFactsContributionsItemKind>,
     *   amount: string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->date = $values['date'];
        $this->kind = $values['kind'];
        $this->description = $values['description'] ?? null;
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
