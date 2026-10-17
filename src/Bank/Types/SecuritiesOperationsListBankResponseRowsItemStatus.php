<?php

namespace Nordlet\Bank\Types;

enum SecuritiesOperationsListBankResponseRowsItemStatus: string
{
    case Posted = "posted";
    case NotPosted = "not_posted";
}
