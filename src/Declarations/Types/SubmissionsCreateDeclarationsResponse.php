<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class SubmissionsCreateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $obligation
     */
    #[JsonProperty('obligation')]
    public string $obligation;

    /**
     * @var int $periodYear
     */
    #[JsonProperty('periodYear')]
    public int $periodYear;

    /**
     * @var ?int $periodMonth
     */
    #[JsonProperty('periodMonth')]
    public ?int $periodMonth;

    /**
     * @var ?string $variant
     */
    #[JsonProperty('variant')]
    public ?string $variant;

    /**
     * @var value-of<SubmissionsCreateDeclarationsResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

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
     * @var ?string $externalRef
     */
    #[JsonProperty('externalRef')]
    public ?string $externalRef;

    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $ruleKey
     */
    #[JsonProperty('ruleKey')]
    public ?string $ruleKey;

    /**
     * @var ?string $period
     */
    #[JsonProperty('period')]
    public ?string $period;

    /**
     * @var ?string $documentKey
     */
    #[JsonProperty('documentKey')]
    public ?string $documentKey;

    /**
     * @var int $amendment
     */
    #[JsonProperty('amendment')]
    public int $amendment;

    /**
     * @var string $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var ?string $transportSystem
     */
    #[JsonProperty('transportSystem')]
    public ?string $transportSystem;

    /**
     * @var ?value-of<SubmissionsCreateDeclarationsResponseEnvironment> $environment
     */
    #[JsonProperty('environment')]
    public ?string $environment;

    /**
     * @var ?DateTime $submittedAt
     */
    #[JsonProperty('submittedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $submittedAt;

    /**
     * @var ?DateTime $acceptedAt
     */
    #[JsonProperty('acceptedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $acceptedAt;

    /**
     * @var ?DateTime $rejectedAt
     */
    #[JsonProperty('rejectedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $rejectedAt;

    /**
     * @var ?DateTime $checkedAt
     */
    #[JsonProperty('checkedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $checkedAt;

    /**
     * @var ?DateTime $nextCheckAt
     */
    #[JsonProperty('nextCheckAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $nextCheckAt;

    /**
     * @var int $attempts
     */
    #[JsonProperty('attempts')]
    public int $attempts;

    /**
     * @var ?string $deliveryError
     */
    #[JsonProperty('deliveryError')]
    public ?string $deliveryError;

    /**
     * @var ?string $sentSha256
     */
    #[JsonProperty('sentSha256')]
    public ?string $sentSha256;

    /**
     * @var ?string $certificateFingerprint
     */
    #[JsonProperty('certificateFingerprint')]
    public ?string $certificateFingerprint;

    /**
     * @var ?string $submittedByActorType
     */
    #[JsonProperty('submittedByActorType')]
    public ?string $submittedByActorType;

    /**
     * @var ?string $submittedByActorId
     */
    #[JsonProperty('submittedByActorId')]
    public ?string $submittedByActorId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   id: string,
     *   obligation: string,
     *   periodYear: int,
     *   status: value-of<SubmissionsCreateDeclarationsResponseStatus>,
     *   fileName: string,
     *   amendment: int,
     *   origin: string,
     *   attempts: int,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   warnings: array<string>,
     *   periodMonth?: ?int,
     *   variant?: ?string,
     *   fileId?: ?string,
     *   externalRef?: ?string,
     *   message?: ?string,
     *   ruleKey?: ?string,
     *   period?: ?string,
     *   documentKey?: ?string,
     *   transportSystem?: ?string,
     *   environment?: ?value-of<SubmissionsCreateDeclarationsResponseEnvironment>,
     *   submittedAt?: ?DateTime,
     *   acceptedAt?: ?DateTime,
     *   rejectedAt?: ?DateTime,
     *   checkedAt?: ?DateTime,
     *   nextCheckAt?: ?DateTime,
     *   deliveryError?: ?string,
     *   sentSha256?: ?string,
     *   certificateFingerprint?: ?string,
     *   submittedByActorType?: ?string,
     *   submittedByActorId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->obligation = $values['obligation'];
        $this->periodYear = $values['periodYear'];
        $this->periodMonth = $values['periodMonth'] ?? null;
        $this->variant = $values['variant'] ?? null;
        $this->status = $values['status'];
        $this->fileName = $values['fileName'];
        $this->fileId = $values['fileId'] ?? null;
        $this->externalRef = $values['externalRef'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->ruleKey = $values['ruleKey'] ?? null;
        $this->period = $values['period'] ?? null;
        $this->documentKey = $values['documentKey'] ?? null;
        $this->amendment = $values['amendment'];
        $this->origin = $values['origin'];
        $this->transportSystem = $values['transportSystem'] ?? null;
        $this->environment = $values['environment'] ?? null;
        $this->submittedAt = $values['submittedAt'] ?? null;
        $this->acceptedAt = $values['acceptedAt'] ?? null;
        $this->rejectedAt = $values['rejectedAt'] ?? null;
        $this->checkedAt = $values['checkedAt'] ?? null;
        $this->nextCheckAt = $values['nextCheckAt'] ?? null;
        $this->attempts = $values['attempts'];
        $this->deliveryError = $values['deliveryError'] ?? null;
        $this->sentSha256 = $values['sentSha256'] ?? null;
        $this->certificateFingerprint = $values['certificateFingerprint'] ?? null;
        $this->submittedByActorType = $values['submittedByActorType'] ?? null;
        $this->submittedByActorId = $values['submittedByActorId'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
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
