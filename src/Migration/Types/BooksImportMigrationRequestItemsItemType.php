<?php

namespace Nordlet\Migration\Types;

enum BooksImportMigrationRequestItemsItemType: string
{
    case Product = "product";
    case Service = "service";
}
