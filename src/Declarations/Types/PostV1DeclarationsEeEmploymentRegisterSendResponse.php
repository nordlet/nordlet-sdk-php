<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEeEmploymentRegisterSendResponse extends JsonSerializableType
{
    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var value-of<PostV1DeclarationsEeEmploymentRegisterSendResponseState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $entryDate
     */
    #[JsonProperty('entryDate')]
    public string $entryDate;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   reference: string,
     *   state: value-of<PostV1DeclarationsEeEmploymentRegisterSendResponseState>,
     *   fileName: string,
     *   entryDate: string,
     *   xml: string,
     *   warnings: array<string>,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reference = $values['reference'];
        $this->state = $values['state'];
        $this->detail = $values['detail'] ?? null;
        $this->fileName = $values['fileName'];
        $this->entryDate = $values['entryDate'];
        $this->xml = $values['xml'];
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
