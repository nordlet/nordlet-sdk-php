<?php

namespace Nordlet\Migration\Types;

enum PostV1MigrationBooksValidateRequestItemsItemType: string
{
    case Product = "product";
    case Service = "service";
}
