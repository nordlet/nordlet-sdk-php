<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class MeAccountResponse extends JsonSerializableType
{
    /**
     * @var MeAccountResponseUser $user
     */
    #[JsonProperty('user')]
    public MeAccountResponseUser $user;

    /**
     * @var string $locale
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @var ?string $activeCompanyId
     */
    #[JsonProperty('activeCompanyId')]
    public ?string $activeCompanyId;

    /**
     * @var string $timeZone
     */
    #[JsonProperty('timeZone')]
    public string $timeZone;

    /**
     * @var ?string $role
     */
    #[JsonProperty('role')]
    public ?string $role;

    /**
     * @var MeAccountResponseBilling $billing
     */
    #[JsonProperty('billing')]
    public MeAccountResponseBilling $billing;

    /**
     * @var int $referralPoints
     */
    #[JsonProperty('referralPoints')]
    public int $referralPoints;

    /**
     * @var MeAccountResponseConsent $consent
     */
    #[JsonProperty('consent')]
    public MeAccountResponseConsent $consent;

    /**
     * @var array<MeAccountResponseCompaniesItem> $companies
     */
    #[JsonProperty('companies'), ArrayType([MeAccountResponseCompaniesItem::class])]
    public array $companies;

    /**
     * @param array{
     *   user: MeAccountResponseUser,
     *   locale: string,
     *   timeZone: string,
     *   billing: MeAccountResponseBilling,
     *   referralPoints: int,
     *   consent: MeAccountResponseConsent,
     *   companies: array<MeAccountResponseCompaniesItem>,
     *   activeCompanyId?: ?string,
     *   role?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->user = $values['user'];
        $this->locale = $values['locale'];
        $this->activeCompanyId = $values['activeCompanyId'] ?? null;
        $this->timeZone = $values['timeZone'];
        $this->role = $values['role'] ?? null;
        $this->billing = $values['billing'];
        $this->referralPoints = $values['referralPoints'];
        $this->consent = $values['consent'];
        $this->companies = $values['companies'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
