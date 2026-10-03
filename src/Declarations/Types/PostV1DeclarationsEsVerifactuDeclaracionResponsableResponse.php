<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEsVerifactuDeclaracionResponsableResponse extends JsonSerializableType
{
    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $mimeType
     */
    #[JsonProperty('mimeType')]
    public string $mimeType;

    /**
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   fileName: string,
     *   mimeType: string,
     *   content: string,
     *   text: string,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'];
        $this->content = $values['content'];
        $this->text = $values['text'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
