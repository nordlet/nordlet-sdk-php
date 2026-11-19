<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\GbVatPenaltiesGetDeclarationsRequestDevice;
use Nordlet\Core\Json\JsonProperty;

class GbVatPenaltiesGetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var GbVatPenaltiesGetDeclarationsRequestDevice $device Facts of the browser the user files from, which HMRC requires with every VAT (MTD) API call: `navigator.userAgent`, a UUID the browser keeps for the device, every screen (width, height, scaling factor, colour depth in bits), the window size in pixels and the time zone as `UTC±hh:mm`.
     */
    #[JsonProperty('device')]
    public GbVatPenaltiesGetDeclarationsRequestDevice $device;

    /**
     * @param array{
     *   device: GbVatPenaltiesGetDeclarationsRequestDevice,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->device = $values['device'];
    }
}
