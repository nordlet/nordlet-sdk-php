<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankMatchRulesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $pattern
     */
    #[JsonProperty('pattern')]
    public string $pattern;

    /**
     * @var ?string $payoutIdPrefix
     */
    #[JsonProperty('payoutIdPrefix')]
    public ?string $payoutIdPrefix;

    /**
     * @var ?string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public ?string $bankAccountId;

    /**
     * @var int $dateWindowDays
     */
    #[JsonProperty('dateWindowDays')]
    public int $dateWindowDays;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   provider: string,
     *   pattern: string,
     *   dateWindowDays: int,
     *   isActive: bool,
     *   createdAt: string,
     *   payoutIdPrefix?: ?string,
     *   bankAccountId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->provider = $values['provider'];
        $this->pattern = $values['pattern'];
        $this->payoutIdPrefix = $values['payoutIdPrefix'] ?? null;
        $this->bankAccountId = $values['bankAccountId'] ?? null;
        $this->dateWindowDays = $values['dateWindowDays'];
        $this->isActive = $values['isActive'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
