<?php

namespace Nordlet\Account\Types;

enum PostV1AccountCompaniesCreateRequestAccountsKeptBy: string
{
    case Company = "company";
    case External = "external";
}
