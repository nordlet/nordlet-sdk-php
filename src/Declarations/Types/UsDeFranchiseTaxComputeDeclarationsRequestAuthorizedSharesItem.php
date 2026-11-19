<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsDeFranchiseTaxComputeDeclarationsRequestAuthorizedSharesItem extends JsonSerializableType
{
    /**
     * @var int $shares
     */
    #[JsonProperty('shares')]
    public int $shares;

    /**
     * @var ?string $parValue
     */
    #[JsonProperty('parValue')]
    public ?string $parValue;

    /**
     * @param array{
     *   shares: int,
     *   parValue?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->shares = $values['shares'];
        $this->parValue = $values['parValue'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
