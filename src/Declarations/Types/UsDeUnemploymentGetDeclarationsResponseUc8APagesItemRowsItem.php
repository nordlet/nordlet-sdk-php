<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsDeUnemploymentGetDeclarationsResponseUc8APagesItemRowsItem extends JsonSerializableType
{
    /**
     * @var float $line
     */
    #[JsonProperty('line')]
    public float $line;

    /**
     * @var ?string $socialSecurityNumber
     */
    #[JsonProperty('socialSecurityNumber')]
    public ?string $socialSecurityNumber;

    /**
     * @var string $firstInitial
     */
    #[JsonProperty('firstInitial')]
    public string $firstInitial;

    /**
     * @var ?string $middleInitial
     */
    #[JsonProperty('middleInitial')]
    public ?string $middleInitial;

    /**
     * @var string $lastName
     */
    #[JsonProperty('lastName')]
    public string $lastName;

    /**
     * @var string $grossCoveredWages
     */
    #[JsonProperty('grossCoveredWages')]
    public string $grossCoveredWages;

    /**
     * @param array{
     *   line: float,
     *   firstInitial: string,
     *   lastName: string,
     *   grossCoveredWages: string,
     *   socialSecurityNumber?: ?string,
     *   middleInitial?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->line = $values['line'];
        $this->socialSecurityNumber = $values['socialSecurityNumber'] ?? null;
        $this->firstInitial = $values['firstInitial'];
        $this->middleInitial = $values['middleInitial'] ?? null;
        $this->lastName = $values['lastName'];
        $this->grossCoveredWages = $values['grossCoveredWages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
