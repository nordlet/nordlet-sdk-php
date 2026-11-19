<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class Us940GetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $year
     */
    #[JsonProperty('year')]
    public float $year;

    /**
     * @var ?string $line1A
     */
    #[JsonProperty('line1a')]
    public ?string $line1A;

    /**
     * @var bool $line1B
     */
    #[JsonProperty('line1b')]
    public bool $line1B;

    /**
     * @var string $line3
     */
    #[JsonProperty('line3')]
    public string $line3;

    /**
     * @var string $line4
     */
    #[JsonProperty('line4')]
    public string $line4;

    /**
     * @var string $line5
     */
    #[JsonProperty('line5')]
    public string $line5;

    /**
     * @var string $line6
     */
    #[JsonProperty('line6')]
    public string $line6;

    /**
     * @var string $line7
     */
    #[JsonProperty('line7')]
    public string $line7;

    /**
     * @var string $line8
     */
    #[JsonProperty('line8')]
    public string $line8;

    /**
     * @var string $line12
     */
    #[JsonProperty('line12')]
    public string $line12;

    /**
     * @var ?Us940GetDeclarationsResponsePart5 $part5
     */
    #[JsonProperty('part5')]
    public ?Us940GetDeclarationsResponsePart5 $part5;

    /**
     * @param array{
     *   year: float,
     *   line1B: bool,
     *   line3: string,
     *   line4: string,
     *   line5: string,
     *   line6: string,
     *   line7: string,
     *   line8: string,
     *   line12: string,
     *   line1A?: ?string,
     *   part5?: ?Us940GetDeclarationsResponsePart5,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->line1A = $values['line1A'] ?? null;
        $this->line1B = $values['line1B'];
        $this->line3 = $values['line3'];
        $this->line4 = $values['line4'];
        $this->line5 = $values['line5'];
        $this->line6 = $values['line6'];
        $this->line7 = $values['line7'];
        $this->line8 = $values['line8'];
        $this->line12 = $values['line12'];
        $this->part5 = $values['part5'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
