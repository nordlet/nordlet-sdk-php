<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class BankAccountsCreatePartnersResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bankCode
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var ?string $bankAccountNumber
     */
    #[JsonProperty('bankAccountNumber')]
    public ?string $bankAccountNumber;

    /**
     * @var ?value-of<BankAccountsCreatePartnersResponseAccountType> $accountType Checking or savings account; a US ACH file needs it
     */
    #[JsonProperty('accountType')]
    public ?string $accountType;

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
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var bool $isDefault
     */
    #[JsonProperty('isDefault')]
    public bool $isDefault;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   currency: string,
     *   isDefault: bool,
     *   createdAt: DateTime,
     *   iban?: ?string,
     *   bankCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   accountType?: ?value-of<BankAccountsCreatePartnersResponseAccountType>,
     *   bankName?: ?string,
     *   bic?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->iban = $values['iban'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
        $this->accountType = $values['accountType'] ?? null;
        $this->bankName = $values['bankName'] ?? null;
        $this->bic = $values['bic'] ?? null;
        $this->currency = $values['currency'];
        $this->isDefault = $values['isDefault'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
