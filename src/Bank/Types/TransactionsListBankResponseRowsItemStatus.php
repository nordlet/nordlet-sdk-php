<?php

namespace Nordlet\Bank\Types;

enum TransactionsListBankResponseRowsItemStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
