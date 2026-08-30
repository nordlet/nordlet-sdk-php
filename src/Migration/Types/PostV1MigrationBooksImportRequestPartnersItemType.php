<?php

namespace Nordlet\Migration\Types;

enum PostV1MigrationBooksImportRequestPartnersItemType: string
{
    case Company = "company";
    case Person = "person";
}
