<?php

namespace Nordlet\Account\Types;

enum PostV1AccountCompaniesUpdateResponseAccountsKeptBy: string
{
    case Company = "company";
    case External = "external";
}
