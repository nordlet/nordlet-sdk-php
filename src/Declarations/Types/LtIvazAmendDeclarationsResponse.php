<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtIvazAmendDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var ?string $fileId
     */
    #[JsonProperty('fileId')]
    public ?string $fileId;

    /**
     * @var LtIvazAmendDeclarationsResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public LtIvazAmendDeclarationsResponseCounts $counts;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @param array{
     *   fileName: string,
     *   counts: LtIvazAmendDeclarationsResponseCounts,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   xml: string,
     *   fileId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'];
        $this->fileId = $values['fileId'] ?? null;
        $this->counts = $values['counts'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
        $this->xml = $values['xml'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
