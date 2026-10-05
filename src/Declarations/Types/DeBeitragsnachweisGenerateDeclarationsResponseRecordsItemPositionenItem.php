<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DeBeitragsnachweisGenerateDeclarationsResponseRecordsItemPositionenItem extends JsonSerializableType
{
    /**
     * @var string $beitragsgruppe
     */
    #[JsonProperty('beitragsgruppe')]
    public string $beitragsgruppe;

    /**
     * @var string $betrag
     */
    #[JsonProperty('betrag')]
    public string $betrag;

    /**
     * @param array{
     *   beitragsgruppe: string,
     *   betrag: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->beitragsgruppe = $values['beitragsgruppe'];
        $this->betrag = $values['betrag'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
