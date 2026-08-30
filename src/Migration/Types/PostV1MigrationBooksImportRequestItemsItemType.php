<?php

namespace Nordlet\Migration\Types;

enum PostV1MigrationBooksImportRequestItemsItemType: string
{
    case Product = "product";
    case Service = "service";
}
