<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlJpkMagGenerateResponseCounts extends JsonSerializableType
{
    /**
     * @var int $pz
     */
    #[JsonProperty('pz')]
    public int $pz;

    /**
     * @var int $pw
     */
    #[JsonProperty('pw')]
    public int $pw;

    /**
     * @var int $wz
     */
    #[JsonProperty('wz')]
    public int $wz;

    /**
     * @var int $rw
     */
    #[JsonProperty('rw')]
    public int $rw;

    /**
     * @var int $rows
     */
    #[JsonProperty('rows')]
    public int $rows;

    /**
     * @param array{
     *   pz: int,
     *   pw: int,
     *   wz: int,
     *   rw: int,
     *   rows: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pz = $values['pz'];
        $this->pw = $values['pw'];
        $this->wz = $values['wz'];
        $this->rw = $values['rw'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
