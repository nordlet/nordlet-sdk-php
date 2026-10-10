<?php

namespace Nordlet\PlatformSellers\Types;

enum CreatePlatformSellersResponseKind: string
{
    case Individual = "individual";
    case Entity = "entity";
}
