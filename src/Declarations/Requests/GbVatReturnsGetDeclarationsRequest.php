<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\GbVatReturnsGetDeclarationsRequestDevice;
use Nordlet\Core\Json\JsonProperty;

class GbVatReturnsGetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var GbVatReturnsGetDeclarationsRequestDevice $device Facts of the browser the user files from, which HMRC requires with every VAT (MTD) API call: `navigator.userAgent`, a UUID the browser keeps for the device, every screen (width, height, scaling factor, colour depth in bits), the window size in pixels and the time zone as `UTC±hh:mm`.
     */
    #[JsonProperty('device')]
    public GbVatReturnsGetDeclarationsRequestDevice $device;

    /**
     * @var string $periodKey
     */
    #[JsonProperty('periodKey')]
    public string $periodKey;

    /**
     * @param array{
     *   device: GbVatReturnsGetDeclarationsRequestDevice,
     *   periodKey: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->device = $values['device'];
        $this->periodKey = $values['periodKey'];
    }
}
