<?php

namespace Nordlet\Bank\Types;

enum SecuritiesGetBankResponseOperationsItemStatus: string
{
    case Posted = "posted";
    case NotPosted = "not_posted";
}
