<?php

namespace Nordlet\Migration\Types;

enum PostV1MigrationBooksValidateRequestPartnersItemType: string
{
    case Company = "company";
    case Person = "person";
}
