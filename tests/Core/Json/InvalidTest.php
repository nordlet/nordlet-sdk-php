<?php

namespace Nordlet\Tests\Core\Json;

use PHPUnit\Framework\TestCase;
use Nordlet\Core\Json\JsonEncoder;
use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class Invalid extends JsonSerializableType
{
    /**
     * @var int $integerProperty
     */
    #[JsonProperty('integer_property')]
    public int $integerProperty;

    /**
     * @param array{
     *   integerProperty: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->integerProperty = $values['integerProperty'];
    }
}

class InvalidTest extends TestCase
{
    public function testInvalidJsonThrowsException(): void
    {
        $this->expectException(\TypeError::class);
        $json = JsonEncoder::encode(
            [
                'integer_property' => 'not_an_integer'
            ],
        );
        Invalid::fromJson($json);
    }
}
