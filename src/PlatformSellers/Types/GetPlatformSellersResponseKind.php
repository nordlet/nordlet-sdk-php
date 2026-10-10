<?php

namespace Nordlet\PlatformSellers\Types;

enum GetPlatformSellersResponseKind: string
{
    case Individual = "individual";
    case Entity = "entity";
}
