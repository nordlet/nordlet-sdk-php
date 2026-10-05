<?php

namespace Nordlet\Account\Types;

enum MeAccountResponseCompaniesItemStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case Deleted = "deleted";
}
