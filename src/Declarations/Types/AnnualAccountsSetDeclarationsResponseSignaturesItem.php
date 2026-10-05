<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AnnualAccountsSetDeclarationsResponseSignaturesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $directorName
     */
    #[JsonProperty('directorName')]
    public string $directorName;

    /**
     * @var value-of<AnnualAccountsSetDeclarationsResponseSignaturesItemDirectorType> $directorType
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
     * @var ?DateTime $signedAt
     */
    #[JsonProperty('signedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $signedAt;

    /**
     * @var ?string $reasonNotSigned
     */
    #[JsonProperty('reasonNotSigned')]
    public ?string $reasonNotSigned;

    /**
     * @param array{
     *   id: string,
     *   directorName: string,
     *   directorType: value-of<AnnualAccountsSetDeclarationsResponseSignaturesItemDirectorType>,
     *   signed: bool,
     *   signedOn?: ?string,
     *   signedAt?: ?DateTime,
     *   reasonNotSigned?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->directorName = $values['directorName'];
        $this->directorType = $values['directorType'];
        $this->signed = $values['signed'];
        $this->signedOn = $values['signedOn'] ?? null;
        $this->signedAt = $values['signedAt'] ?? null;
        $this->reasonNotSigned = $values['reasonNotSigned'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
