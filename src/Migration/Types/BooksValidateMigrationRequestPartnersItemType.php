<?php

namespace Nordlet\Migration\Types;

enum BooksValidateMigrationRequestPartnersItemType: string
{
    case Company = "company";
    case Person = "person";
}
