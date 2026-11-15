<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CompaniesContextAccountResponsePeriods extends JsonSerializableType
{
    /**
     * @var array<CompaniesContextAccountResponsePeriodsOpenItem> $open
     */
    #[JsonProperty('open'), ArrayType([CompaniesContextAccountResponsePeriodsOpenItem::class])]
    public array $open;

    /**
     * @var array<CompaniesContextAccountResponsePeriodsLockedItem> $locked
     */
    #[JsonProperty('locked'), ArrayType([CompaniesContextAccountResponsePeriodsLockedItem::class])]
    public array $locked;

    /**
     * @param array{
     *   open: array<CompaniesContextAccountResponsePeriodsOpenItem>,
     *   locked: array<CompaniesContextAccountResponsePeriodsLockedItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->open = $values['open'];
        $this->locked = $values['locked'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
