<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ExportAccountResponse extends JsonSerializableType
{
    /**
     * @var DateTime $generatedAt
     */
    #[JsonProperty('generatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $generatedAt;

    /**
     * @var ExportAccountResponseUser $user
     */
    #[JsonProperty('user')]
    public ExportAccountResponseUser $user;

    /**
     * @var ExportAccountResponseConsent $consent
     */
    #[JsonProperty('consent')]
    public ExportAccountResponseConsent $consent;

    /**
     * @var array<ExportAccountResponseMembershipsItem> $memberships
     */
    #[JsonProperty('memberships'), ArrayType([ExportAccountResponseMembershipsItem::class])]
    public array $memberships;

    /**
     * @var array<ExportAccountResponseSessionsItem> $sessions
     */
    #[JsonProperty('sessions'), ArrayType([ExportAccountResponseSessionsItem::class])]
    public array $sessions;

    /**
     * @var ?ExportAccountResponseBilling $billing
     */
    #[JsonProperty('billing')]
    public ?ExportAccountResponseBilling $billing;

    /**
     * @var array<ExportAccountResponseBillingAccountsItem> $billingAccounts
     */
    #[JsonProperty('billingAccounts'), ArrayType([ExportAccountResponseBillingAccountsItem::class])]
    public array $billingAccounts;

    /**
     * @var array<ExportAccountResponseCreditTransactionsItem> $creditTransactions
     */
    #[JsonProperty('creditTransactions'), ArrayType([ExportAccountResponseCreditTransactionsItem::class])]
    public array $creditTransactions;

    /**
     * @var array<ExportAccountResponseAuditEntriesItem> $auditEntries
     */
    #[JsonProperty('auditEntries'), ArrayType([ExportAccountResponseAuditEntriesItem::class])]
    public array $auditEntries;

    /**
     * @var array<ExportAccountResponseAuthEventsItem> $authEvents
     */
    #[JsonProperty('authEvents'), ArrayType([ExportAccountResponseAuthEventsItem::class])]
    public array $authEvents;

    /**
     * @var array<ExportAccountResponseApiKeysItem> $apiKeys
     */
    #[JsonProperty('apiKeys'), ArrayType([ExportAccountResponseApiKeysItem::class])]
    public array $apiKeys;

    /**
     * @var array<ExportAccountResponseOauthGrantsItem> $oauthGrants
     */
    #[JsonProperty('oauthGrants'), ArrayType([ExportAccountResponseOauthGrantsItem::class])]
    public array $oauthGrants;

    /**
     * @var array<ExportAccountResponseReferralPointsItem> $referralPoints
     */
    #[JsonProperty('referralPoints'), ArrayType([ExportAccountResponseReferralPointsItem::class])]
    public array $referralPoints;

    /**
     * @param array{
     *   generatedAt: DateTime,
     *   user: ExportAccountResponseUser,
     *   consent: ExportAccountResponseConsent,
     *   memberships: array<ExportAccountResponseMembershipsItem>,
     *   sessions: array<ExportAccountResponseSessionsItem>,
     *   billingAccounts: array<ExportAccountResponseBillingAccountsItem>,
     *   creditTransactions: array<ExportAccountResponseCreditTransactionsItem>,
     *   auditEntries: array<ExportAccountResponseAuditEntriesItem>,
     *   authEvents: array<ExportAccountResponseAuthEventsItem>,
     *   apiKeys: array<ExportAccountResponseApiKeysItem>,
     *   oauthGrants: array<ExportAccountResponseOauthGrantsItem>,
     *   referralPoints: array<ExportAccountResponseReferralPointsItem>,
     *   billing?: ?ExportAccountResponseBilling,
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
        $this->billingAccounts = $values['billingAccounts'];
        $this->creditTransactions = $values['creditTransactions'];
        $this->auditEntries = $values['auditEntries'];
        $this->authEvents = $values['authEvents'];
        $this->apiKeys = $values['apiKeys'];
        $this->oauthGrants = $values['oauthGrants'];
        $this->referralPoints = $values['referralPoints'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
