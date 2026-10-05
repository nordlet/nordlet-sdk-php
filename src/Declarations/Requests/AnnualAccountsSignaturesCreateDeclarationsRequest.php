<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\AnnualAccountsSignaturesCreateDeclarationsRequestDirectorType;
use DateTime;
use Nordlet\Core\Types\Date;

class AnnualAccountsSignaturesCreateDeclarationsRequest extends JsonSerializableType
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
     * @var value-of<AnnualAccountsSignaturesCreateDeclarationsRequestDirectorType> $directorType
     */
    #[JsonProperty('directorType')]
    public string $directorType;

    /**
     * @var bool $signed
     */
    #[JsonProperty('signed')]
    public bool $signed;

    /**
     * @var ?DateTime $signedOn
     */
    #[JsonProperty('signedOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $signedOn;

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
     *   year: int,
     *   directorName: string,
     *   directorType: value-of<AnnualAccountsSignaturesCreateDeclarationsRequestDirectorType>,
     *   signed: bool,
     *   signedOn?: ?DateTime,
     *   signedAt?: ?DateTime,
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
