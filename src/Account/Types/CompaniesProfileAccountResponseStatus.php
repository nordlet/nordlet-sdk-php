<?php

namespace Nordlet\Account\Types;

enum CompaniesProfileAccountResponseStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case Deleted = "deleted";
}
