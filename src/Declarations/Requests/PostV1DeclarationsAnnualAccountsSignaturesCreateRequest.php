<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsAnnualAccountsSignaturesCreateRequestDirectorType;

class PostV1DeclarationsAnnualAccountsSignaturesCreateRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $directorName
     */
    #[JsonProperty('directorName')]
    public string $directorName;

    /**
     * @var value-of<PostV1DeclarationsAnnualAccountsSignaturesCreateRequestDirectorType> $directorType
     */
    #[JsonProperty('directorType')]
    public string $directorType;

    /**
     * @var bool $signed
     */
    #[JsonProperty('signed')]
    public bool $signed;

    /**
     * @var ?string $signedOn
     */
    #[JsonProperty('signedOn')]
    public ?string $signedOn;

    /**
     * @var ?string $signedAt
     */
    #[JsonProperty('signedAt')]
    public ?string $signedAt;

    /**
     * @var ?string $reasonNotSigned
     */
    #[JsonProperty('reasonNotSigned')]
    public ?string $reasonNotSigned;

    /**
     * @param array{
     *   year: int,
     *   directorName: string,
     *   directorType: value-of<PostV1DeclarationsAnnualAccountsSignaturesCreateRequestDirectorType>,
     *   signed: bool,
     *   signedOn?: ?string,
     *   signedAt?: ?string,
     *   reasonNotSigned?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->directorName = $values['directorName'];
        $this->directorType = $values['directorType'];
        $this->signed = $values['signed'];
        $this->signedOn = $values['signedOn'] ?? null;
        $this->signedAt = $values['signedAt'] ?? null;
        $this->reasonNotSigned = $values['reasonNotSigned'] ?? null;
    }
}
