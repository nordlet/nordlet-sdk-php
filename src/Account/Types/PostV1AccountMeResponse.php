<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountMeResponse extends JsonSerializableType
{
    /**
     * @var PostV1AccountMeResponseUser $user
     */
    #[JsonProperty('user')]
    public PostV1AccountMeResponseUser $user;

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
     * @var ?string $role
     */
    #[JsonProperty('role')]
    public ?string $role;

    /**
     * @var PostV1AccountMeResponseBilling $billing
     */
    #[JsonProperty('billing')]
    public PostV1AccountMeResponseBilling $billing;

    /**
     * @var PostV1AccountMeResponseConsent $consent
     */
    #[JsonProperty('consent')]
    public PostV1AccountMeResponseConsent $consent;

    /**
     * @var array<PostV1AccountMeResponseCompaniesItem> $companies
     */
    #[JsonProperty('companies'), ArrayType([PostV1AccountMeResponseCompaniesItem::class])]
    public array $companies;

    /**
     * @param array{
     *   user: PostV1AccountMeResponseUser,
     *   locale: string,
     *   billing: PostV1AccountMeResponseBilling,
     *   consent: PostV1AccountMeResponseConsent,
     *   companies: array<PostV1AccountMeResponseCompaniesItem>,
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
        $this->role = $values['role'] ?? null;
        $this->billing = $values['billing'];
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
