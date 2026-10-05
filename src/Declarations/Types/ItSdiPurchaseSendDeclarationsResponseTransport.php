<?php

namespace Nordlet\Declarations\Types;

enum ItSdiPurchaseSendDeclarationsResponseTransport: string
{
    case Bridge = "bridge";
    case Direct = "direct";
}
