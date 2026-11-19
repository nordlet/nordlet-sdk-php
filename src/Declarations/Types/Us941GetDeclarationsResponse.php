<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class Us941GetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $year
     */
    #[JsonProperty('year')]
    public float $year;

    /**
     * @var float $quarter
     */
    #[JsonProperty('quarter')]
    public float $quarter;

    /**
     * @var float $line1
     */
    #[JsonProperty('line1')]
    public float $line1;

    /**
     * @var string $line2
     */
    #[JsonProperty('line2')]
    public string $line2;

    /**
     * @var string $line3
     */
    #[JsonProperty('line3')]
    public string $line3;

    /**
     * @var bool $line4
     */
    #[JsonProperty('line4')]
    public bool $line4;

    /**
     * @var Us941GetDeclarationsResponseLine5A $line5A
     */
    #[JsonProperty('line5a')]
    public Us941GetDeclarationsResponseLine5A $line5A;

    /**
     * @var Us941GetDeclarationsResponseLine5C $line5C
     */
    #[JsonProperty('line5c')]
    public Us941GetDeclarationsResponseLine5C $line5C;

    /**
     * @var Us941GetDeclarationsResponseLine5D $line5D
     */
    #[JsonProperty('line5d')]
    public Us941GetDeclarationsResponseLine5D $line5D;

    /**
     * @var string $line5E
     */
    #[JsonProperty('line5e')]
    public string $line5E;

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
     * @var string $line10
     */
    #[JsonProperty('line10')]
    public string $line10;

    /**
     * @var string $line12
     */
    #[JsonProperty('line12')]
    public string $line12;

    /**
     * @var ?string $line13
     */
    #[JsonProperty('line13')]
    public ?string $line13;

    /**
     * @var ?string $line14
     */
    #[JsonProperty('line14')]
    public ?string $line14;

    /**
     * @var ?string $line15
     */
    #[JsonProperty('line15')]
    public ?string $line15;

    /**
     * @var Us941GetDeclarationsResponseLine16 $line16
     */
    #[JsonProperty('line16')]
    public Us941GetDeclarationsResponseLine16 $line16;

    /**
     * @var array<Us941GetDeclarationsResponseScheduleBItem> $scheduleB
     */
    #[JsonProperty('scheduleB'), ArrayType([Us941GetDeclarationsResponseScheduleBItem::class])]
    public array $scheduleB;

    /**
     * @param array{
     *   year: float,
     *   quarter: float,
     *   line1: float,
     *   line2: string,
     *   line3: string,
     *   line4: bool,
     *   line5A: Us941GetDeclarationsResponseLine5A,
     *   line5C: Us941GetDeclarationsResponseLine5C,
     *   line5D: Us941GetDeclarationsResponseLine5D,
     *   line5E: string,
     *   line6: string,
     *   line7: string,
     *   line10: string,
     *   line12: string,
     *   line16: Us941GetDeclarationsResponseLine16,
     *   scheduleB: array<Us941GetDeclarationsResponseScheduleBItem>,
     *   line13?: ?string,
     *   line14?: ?string,
     *   line15?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->quarter = $values['quarter'];
        $this->line1 = $values['line1'];
        $this->line2 = $values['line2'];
        $this->line3 = $values['line3'];
        $this->line4 = $values['line4'];
        $this->line5A = $values['line5A'];
        $this->line5C = $values['line5C'];
        $this->line5D = $values['line5D'];
        $this->line5E = $values['line5E'];
        $this->line6 = $values['line6'];
        $this->line7 = $values['line7'];
        $this->line10 = $values['line10'];
        $this->line12 = $values['line12'];
        $this->line13 = $values['line13'] ?? null;
        $this->line14 = $values['line14'] ?? null;
        $this->line15 = $values['line15'] ?? null;
        $this->line16 = $values['line16'];
        $this->scheduleB = $values['scheduleB'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
