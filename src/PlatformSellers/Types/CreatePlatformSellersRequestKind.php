<?php

namespace Nordlet\PlatformSellers\Types;

enum CreatePlatformSellersRequestKind: string
{
    case Individual = "individual";
    case Entity = "entity";
}
