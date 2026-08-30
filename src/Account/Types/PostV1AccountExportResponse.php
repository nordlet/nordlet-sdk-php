<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountExportResponse extends JsonSerializableType
{
    /**
     * @var string $generatedAt
     */
    #[JsonProperty('generatedAt')]
    public string $generatedAt;

    /**
     * @var PostV1AccountExportResponseUser $user
     */
    #[JsonProperty('user')]
    public PostV1AccountExportResponseUser $user;

    /**
     * @var PostV1AccountExportResponseConsent $consent
     */
    #[JsonProperty('consent')]
    public PostV1AccountExportResponseConsent $consent;

    /**
     * @var array<PostV1AccountExportResponseMembershipsItem> $memberships
     */
    #[JsonProperty('memberships'), ArrayType([PostV1AccountExportResponseMembershipsItem::class])]
    public array $memberships;

    /**
     * @var array<PostV1AccountExportResponseSessionsItem> $sessions
     */
    #[JsonProperty('sessions'), ArrayType([PostV1AccountExportResponseSessionsItem::class])]
    public array $sessions;

    /**
     * @var ?PostV1AccountExportResponseBilling $billing
     */
    #[JsonProperty('billing')]
    public ?PostV1AccountExportResponseBilling $billing;

    /**
     * @var array<PostV1AccountExportResponseCreditTransactionsItem> $creditTransactions
     */
    #[JsonProperty('creditTransactions'), ArrayType([PostV1AccountExportResponseCreditTransactionsItem::class])]
    public array $creditTransactions;

    /**
     * @var array<PostV1AccountExportResponseAuditEntriesItem> $auditEntries
     */
    #[JsonProperty('auditEntries'), ArrayType([PostV1AccountExportResponseAuditEntriesItem::class])]
    public array $auditEntries;

    /**
     * @param array{
     *   generatedAt: string,
     *   user: PostV1AccountExportResponseUser,
     *   consent: PostV1AccountExportResponseConsent,
     *   memberships: array<PostV1AccountExportResponseMembershipsItem>,
     *   sessions: array<PostV1AccountExportResponseSessionsItem>,
     *   creditTransactions: array<PostV1AccountExportResponseCreditTransactionsItem>,
     *   auditEntries: array<PostV1AccountExportResponseAuditEntriesItem>,
     *   billing?: ?PostV1AccountExportResponseBilling,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->generatedAt = $values['generatedAt'];
        $this->user = $values['user'];
        $this->consent = $values['consent'];
        $this->memberships = $values['memberships'];
        $this->sessions = $values['sessions'];
        $this->billing = $values['billing'] ?? null;
        $this->creditTransactions = $values['creditTransactions'];
        $this->auditEntries = $values['auditEntries'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
