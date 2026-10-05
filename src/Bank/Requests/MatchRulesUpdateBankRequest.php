<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MatchRulesUpdateBankRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $provider
     */
    #[JsonProperty('provider')]
    public ?string $provider;

    /**
     * @var ?string $pattern
     */
    #[JsonProperty('pattern')]
    public ?string $pattern;

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
     *   id: string,
     *   name?: ?string,
     *   provider?: ?string,
     *   pattern?: ?string,
     *   payoutIdPrefix?: ?string,
     *   bankAccountId?: ?string,
     *   dateWindowDays?: ?int,
     *   isActive?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'] ?? null;
        $this->provider = $values['provider'] ?? null;
        $this->pattern = $values['pattern'] ?? null;
        $this->payoutIdPrefix = $values['payoutIdPrefix'] ?? null;
        $this->bankAccountId = $values['bankAccountId'] ?? null;
        $this->dateWindowDays = $values['dateWindowDays'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
    }
}
