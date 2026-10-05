<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DeReturnsGenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $ruleKey
     */
    #[JsonProperty('ruleKey')]
    public string $ruleKey;

    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $mimeType
     */
    #[JsonProperty('mimeType')]
    public string $mimeType;

    /**
     * @var ?string $variant
     */
    #[JsonProperty('variant')]
    public ?string $variant;

    /**
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   ruleKey: string,
     *   period: string,
     *   fileName: string,
     *   mimeType: string,
     *   content: string,
     *   warnings: array<string>,
     *   variant?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ruleKey = $values['ruleKey'];
        $this->period = $values['period'];
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'];
        $this->variant = $values['variant'] ?? null;
        $this->content = $values['content'];
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
