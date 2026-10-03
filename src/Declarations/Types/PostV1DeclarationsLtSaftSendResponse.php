<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtSaftSendResponse extends JsonSerializableType
{
    /**
     * @var string $caseId
     */
    #[JsonProperty('caseId')]
    public string $caseId;

    /**
     * @var value-of<PostV1DeclarationsLtSaftSendResponseState> $state
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
     * @var bool $confirmed
     */
    #[JsonProperty('confirmed')]
    public bool $confirmed;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   caseId: string,
     *   state: value-of<PostV1DeclarationsLtSaftSendResponseState>,
     *   fileName: string,
     *   confirmed: bool,
     *   warnings: array<string>,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->caseId = $values['caseId'];
        $this->state = $values['state'];
        $this->detail = $values['detail'] ?? null;
        $this->fileName = $values['fileName'];
        $this->confirmed = $values['confirmed'];
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
