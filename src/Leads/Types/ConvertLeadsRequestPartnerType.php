<?php

namespace Nordlet\Leads\Types;

enum ConvertLeadsRequestPartnerType: string
{
    case Company = "company";
    case Person = "person";
}
