<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesSetDeclarationsResponseInputAnnex5 extends JsonSerializableType
{
    /**
     * @var ?string $gifts 5000: gifts and donations of the month, except those of 5010
     */
    #[JsonProperty('gifts')]
    public ?string $gifts;

    /**
     * @var ?string $giftsToListedPersons 5010: gifts and donations of the month to persons on the TuMS § 11 lg 1 list or § 11 lg 10 associations (0 when none)
     */
    #[JsonProperty('giftsToListedPersons')]
    public ?string $giftsToListedPersons;

    /**
     * @var ?value-of<EeTsdAnnexesSetDeclarationsResponseInputAnnex5Limit> $limit TuMS § 49 lg 2 limit used this month for 5020: `socialTax` 3 % of the personalised social-taxed payments of the year (5030), `profit` 10 % of the last financial year’s profit (5040, 5050); the choice of December is final
     */
    #[JsonProperty('limit')]
    public ?string $limit;

    /**
     * @var ?string $lastYearProfit 5040: profit of the last financial year ended by 1 January, own profit only (0 for a loss); needed with `profit`
     */
    #[JsonProperty('lastYearProfit')]
    public ?string $lastYearProfit;

    /**
     * @var ?string $entertainment 5100: costs of the month for food, transport, accommodation or entertainment of guests or partners (0 to use the cumulative recalculation without spending)
     */
    #[JsonProperty('entertainment')]
    public ?string $entertainment;

    /**
     * @var ?string $listedPersonTaxableGifts 5180: part II, taxable gifts and donations of a person on the TuMS § 11 lg 1 list; excludes the part I fields
     */
    #[JsonProperty('listedPersonTaxableGifts')]
    public ?string $listedPersonTaxableGifts;

    /**
     * @param array{
     *   gifts?: ?string,
     *   giftsToListedPersons?: ?string,
     *   limit?: ?value-of<EeTsdAnnexesSetDeclarationsResponseInputAnnex5Limit>,
     *   lastYearProfit?: ?string,
     *   entertainment?: ?string,
     *   listedPersonTaxableGifts?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->gifts = $values['gifts'] ?? null;
        $this->giftsToListedPersons = $values['giftsToListedPersons'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->lastYearProfit = $values['lastYearProfit'] ?? null;
        $this->entertainment = $values['entertainment'] ?? null;
        $this->listedPersonTaxableGifts = $values['listedPersonTaxableGifts'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
