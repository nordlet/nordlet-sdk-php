<?php

namespace Nordlet\PlatformSellers\Types;

enum UpdatePlatformSellersRequestKind: string
{
    case Individual = "individual";
    case Entity = "entity";
}
