<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

/**
 * What the bank gave the company for payment files from this account: the Bacs service user number for a UK account, the ACH Immediate Origin and Company Identification for a US account
 */
class AccountsCreateBankRequestPaymentFileSettings extends JsonSerializableType
{
    /**
     * @var ?string $serviceUserNumber Bacs: the service user number (SUN) of the company for this account
     */
    #[JsonProperty('serviceUserNumber')]
    public ?string $serviceUserNumber;

    /**
     * @var ?string $serviceUserName Bacs: the service user's short name; defaults to the company name
     */
    #[JsonProperty('serviceUserName')]
    public ?string $serviceUserName;

    /**
     * @var ?string $odfiRoutingNumber Nacha: the routing number of the bank that receives the file; defaults to the account's bankCode
     */
    #[JsonProperty('odfiRoutingNumber')]
    public ?string $odfiRoutingNumber;

    /**
     * @var ?string $immediateOrigin Nacha: the Immediate Origin the bank gave the company
     */
    #[JsonProperty('immediateOrigin')]
    public ?string $immediateOrigin;

    /**
     * @var ?string $immediateDestinationName Nacha: the name of the bank that receives the file
     */
    #[JsonProperty('immediateDestinationName')]
    public ?string $immediateDestinationName;

    /**
     * @var ?string $companyIdentification Nacha: the Company Identification the bank gave the company
     */
    #[JsonProperty('companyIdentification')]
    public ?string $companyIdentification;

    /**
     * @var ?string $companyName Nacha: the company name shown to the receiver; defaults to the company name
     */
    #[JsonProperty('companyName')]
    public ?string $companyName;

    /**
     * @var ?string $companyDiscretionaryData Nacha: the Company Discretionary Data the bank asks for
     */
    #[JsonProperty('companyDiscretionaryData')]
    public ?string $companyDiscretionaryData;

    /**
     * @var ?string $bic pain.001: the BIC of the bank that holds this account, written as the debtor agent; required for a SEK supplier file from a Swedish account
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var ?string $initiatingPartyBankId pain.001: the identifier the bank gave the company for file payments (at Swedbank the agreement ID), written as InitgPty/Id/OrgId/Othr with scheme BANK
     */
    #[JsonProperty('initiatingPartyBankId')]
    public ?string $initiatingPartyBankId;

    /**
     * @param array{
     *   serviceUserNumber?: ?string,
     *   serviceUserName?: ?string,
     *   odfiRoutingNumber?: ?string,
     *   immediateOrigin?: ?string,
     *   immediateDestinationName?: ?string,
     *   companyIdentification?: ?string,
     *   companyName?: ?string,
     *   companyDiscretionaryData?: ?string,
     *   bic?: ?string,
     *   initiatingPartyBankId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->serviceUserNumber = $values['serviceUserNumber'] ?? null;
        $this->serviceUserName = $values['serviceUserName'] ?? null;
        $this->odfiRoutingNumber = $values['odfiRoutingNumber'] ?? null;
        $this->immediateOrigin = $values['immediateOrigin'] ?? null;
        $this->immediateDestinationName = $values['immediateDestinationName'] ?? null;
        $this->companyIdentification = $values['companyIdentification'] ?? null;
        $this->companyName = $values['companyName'] ?? null;
        $this->companyDiscretionaryData = $values['companyDiscretionaryData'] ?? null;
        $this->bic = $values['bic'] ?? null;
        $this->initiatingPartyBankId = $values['initiatingPartyBankId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
