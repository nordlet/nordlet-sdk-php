<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerAccountsUpdateResponseTranslations extends JsonSerializableType
{
    /**
     * @var ?PostV1LedgerAccountsUpdateResponseTranslationsLt $lt
     */
    #[JsonProperty('lt')]
    public ?PostV1LedgerAccountsUpdateResponseTranslationsLt $lt;

    /**
     * @var ?PostV1LedgerAccountsUpdateResponseTranslationsEn $en
     */
    #[JsonProperty('en')]
    public ?PostV1LedgerAccountsUpdateResponseTranslationsEn $en;

    /**
     * @var ?PostV1LedgerAccountsUpdateResponseTranslationsRu $ru
     */
    #[JsonProperty('ru')]
    public ?PostV1LedgerAccountsUpdateResponseTranslationsRu $ru;

    /**
     * @param array{
     *   lt?: ?PostV1LedgerAccountsUpdateResponseTranslationsLt,
     *   en?: ?PostV1LedgerAccountsUpdateResponseTranslationsEn,
     *   ru?: ?PostV1LedgerAccountsUpdateResponseTranslationsRu,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->lt = $values['lt'] ?? null;
        $this->en = $values['en'] ?? null;
        $this->ru = $values['ru'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
