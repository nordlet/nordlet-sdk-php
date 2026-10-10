<?php

namespace Nordlet\PlatformSellers\Types;

enum UpdatePlatformSellersResponseKind: string
{
    case Individual = "individual";
    case Entity = "entity";
}
