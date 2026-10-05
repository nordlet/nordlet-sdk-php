<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlJpkV7MGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var string $kodUrzedu
     */
    #[JsonProperty('kodUrzedu')]
    public string $kodUrzedu;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?int $celZlozenia
     */
    #[JsonProperty('celZlozenia')]
    public ?int $celZlozenia;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   kodUrzedu: string,
     *   email: string,
     *   celZlozenia?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->kodUrzedu = $values['kodUrzedu'];
        $this->email = $values['email'];
        $this->celZlozenia = $values['celZlozenia'] ?? null;
    }
}
