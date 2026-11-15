<?php

namespace Nordlet\Account\Types;

enum CompaniesContextAccountResponseProfileStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case Deleted = "deleted";
}
