<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class AgreementsBillingRunAgreementsResponse extends JsonSerializableType
{
    /**
     * @var array<AgreementsBillingRunAgreementsResponseGeneratedItem> $generated
     */
    #[JsonProperty('generated'), ArrayType([AgreementsBillingRunAgreementsResponseGeneratedItem::class])]
    public array $generated;

    /**
     * @var array<string> $expired
     */
    #[JsonProperty('expired'), ArrayType(['string'])]
    public array $expired;

    /**
     * @var array<AgreementsBillingRunAgreementsResponseErrorsItem> $errors
     */
    #[JsonProperty('errors'), ArrayType([AgreementsBillingRunAgreementsResponseErrorsItem::class])]
    public array $errors;

    /**
     * @param array{
     *   generated: array<AgreementsBillingRunAgreementsResponseGeneratedItem>,
     *   expired: array<string>,
     *   errors: array<AgreementsBillingRunAgreementsResponseErrorsItem>,
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
