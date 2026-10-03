<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsCertificatesUploadResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var string $fieldKey
     */
    #[JsonProperty('fieldKey')]
    public string $fieldKey;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var value-of<PostV1DeclarationsCertificatesUploadResponseRowsItemFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var ?string $fingerprint
     */
    #[JsonProperty('fingerprint')]
    public ?string $fingerprint;

    /**
     * @var ?string $subject
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $issuer
     */
    #[JsonProperty('issuer')]
    public ?string $issuer;

    /**
     * @var ?string $notBefore
     */
    #[JsonProperty('notBefore')]
    public ?string $notBefore;

    /**
     * @var ?string $notAfter
     */
    #[JsonProperty('notAfter')]
    public ?string $notAfter;

    /**
     * @var string $sha256
     */
    #[JsonProperty('sha256')]
    public string $sha256;

    /**
     * @var value-of<PostV1DeclarationsCertificatesUploadResponseRowsItemHealth> $health
     */
    #[JsonProperty('health')]
    public string $health;

    /**
     * @var ?int $daysLeft
     */
    #[JsonProperty('daysLeft')]
    public ?int $daysLeft;

    /**
     * @var string $uploadedAt
     */
    #[JsonProperty('uploadedAt')]
    public string $uploadedAt;

    /**
     * @param array{
     *   id: string,
     *   system: string,
     *   fieldKey: string,
     *   fileName: string,
     *   format: value-of<PostV1DeclarationsCertificatesUploadResponseRowsItemFormat>,
     *   sha256: string,
     *   health: value-of<PostV1DeclarationsCertificatesUploadResponseRowsItemHealth>,
     *   uploadedAt: string,
     *   fingerprint?: ?string,
     *   subject?: ?string,
     *   issuer?: ?string,
     *   notBefore?: ?string,
     *   notAfter?: ?string,
     *   daysLeft?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->system = $values['system'];
        $this->fieldKey = $values['fieldKey'];
        $this->fileName = $values['fileName'];
        $this->format = $values['format'];
        $this->fingerprint = $values['fingerprint'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->issuer = $values['issuer'] ?? null;
        $this->notBefore = $values['notBefore'] ?? null;
        $this->notAfter = $values['notAfter'] ?? null;
        $this->sha256 = $values['sha256'];
        $this->health = $values['health'];
        $this->daysLeft = $values['daysLeft'] ?? null;
        $this->uploadedAt = $values['uploadedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
