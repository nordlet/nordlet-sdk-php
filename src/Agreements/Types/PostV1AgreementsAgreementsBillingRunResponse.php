<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AgreementsAgreementsBillingRunResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1AgreementsAgreementsBillingRunResponseGeneratedItem> $generated
     */
    #[JsonProperty('generated'), ArrayType([PostV1AgreementsAgreementsBillingRunResponseGeneratedItem::class])]
    public array $generated;

    /**
     * @var array<string> $expired
     */
    #[JsonProperty('expired'), ArrayType(['string'])]
    public array $expired;

    /**
     * @var array<PostV1AgreementsAgreementsBillingRunResponseErrorsItem> $errors
     */
    #[JsonProperty('errors'), ArrayType([PostV1AgreementsAgreementsBillingRunResponseErrorsItem::class])]
    public array $errors;

    /**
     * @param array{
     *   generated: array<PostV1AgreementsAgreementsBillingRunResponseGeneratedItem>,
     *   expired: array<string>,
     *   errors: array<PostV1AgreementsAgreementsBillingRunResponseErrorsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->generated = $values['generated'];
        $this->expired = $values['expired'];
        $this->errors = $values['errors'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
