<?php

namespace Nordlet\Migration\Types;

enum BooksImportMigrationRequestPartnersItemType: string
{
    case Company = "company";
    case Person = "person";
}
