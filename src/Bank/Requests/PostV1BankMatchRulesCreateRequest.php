<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankMatchRulesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $provider
     */
    #[JsonProperty('provider')]
    public ?string $provider;

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
     * @var ?int $dateWindowDays
     */
    #[JsonProperty('dateWindowDays')]
    public ?int $dateWindowDays;

    /**
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @param array{
     *   name: string,
     *   pattern: string,
     *   provider?: ?string,
     *   payoutIdPrefix?: ?string,
     *   bankAccountId?: ?string,
     *   dateWindowDays?: ?int,
     *   isActive?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->provider = $values['provider'] ?? null;
        $this->pattern = $values['pattern'];
        $this->payoutIdPrefix = $values['payoutIdPrefix'] ?? null;
        $this->bankAccountId = $values['bankAccountId'] ?? null;
        $this->dateWindowDays = $values['dateWindowDays'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
    }
}
