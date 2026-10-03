<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsIeCt1GenerateResponseAccounts extends JsonSerializableType
{
    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $xhtml
     */
    #[JsonProperty('xhtml')]
    public string $xhtml;

    /**
     * @param array{
     *   fileName: string,
     *   xhtml: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'];
        $this->xhtml = $values['xhtml'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
