<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerAccountsUpdateRequestTranslations extends JsonSerializableType
{
    /**
     * @var ?PostV1LedgerAccountsUpdateRequestTranslationsLt $lt
     */
    #[JsonProperty('lt')]
    public ?PostV1LedgerAccountsUpdateRequestTranslationsLt $lt;

    /**
     * @var ?PostV1LedgerAccountsUpdateRequestTranslationsEn $en
     */
    #[JsonProperty('en')]
    public ?PostV1LedgerAccountsUpdateRequestTranslationsEn $en;

    /**
     * @var ?PostV1LedgerAccountsUpdateRequestTranslationsRu $ru
     */
    #[JsonProperty('ru')]
    public ?PostV1LedgerAccountsUpdateRequestTranslationsRu $ru;

    /**
     * @param array{
     *   lt?: ?PostV1LedgerAccountsUpdateRequestTranslationsLt,
     *   en?: ?PostV1LedgerAccountsUpdateRequestTranslationsEn,
     *   ru?: ?PostV1LedgerAccountsUpdateRequestTranslationsRu,
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
