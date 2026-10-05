<?php

namespace Nordlet\Account\Types;

enum CompaniesUpdateAccountResponseStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case Deleted = "deleted";
}
