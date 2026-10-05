<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BankAccountsUpdatePartnersRequest extends JsonSerializableType
{
    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bankName
     */
    #[JsonProperty('bankName')]
    public ?string $bankName;

    /**
     * @var ?string $bic
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?bool $isDefault
     */
    #[JsonProperty('isDefault')]
    public ?bool $isDefault;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   iban?: ?string,
     *   bankName?: ?string,
     *   bic?: ?string,
     *   currency?: ?string,
     *   isDefault?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->iban = $values['iban'] ?? null;
        $this->bankName = $values['bankName'] ?? null;
        $this->bic = $values['bic'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->isDefault = $values['isDefault'] ?? null;
        $this->id = $values['id'];
    }
}
