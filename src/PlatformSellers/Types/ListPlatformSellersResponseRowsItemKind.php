<?php

namespace Nordlet\PlatformSellers\Types;

enum ListPlatformSellersResponseRowsItemKind: string
{
    case Individual = "individual";
    case Entity = "entity";
}
