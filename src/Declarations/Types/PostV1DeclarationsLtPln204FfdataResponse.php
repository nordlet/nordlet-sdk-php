<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtPln204FfdataResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public string $ratePercent;

    /**
     * @var string $rateCode
     */
    #[JsonProperty('rateCode')]
    public string $rateCode;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   year: int,
     *   fileName: string,
     *   xml: string,
     *   ratePercent: string,
     *   rateCode: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->ratePercent = $values['ratePercent'];
        $this->rateCode = $values['rateCode'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
