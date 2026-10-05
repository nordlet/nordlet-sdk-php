<?php

namespace Nordlet\Migration\Types;

enum BooksValidateMigrationRequestItemsItemType: string
{
    case Product = "product";
    case Service = "service";
}
