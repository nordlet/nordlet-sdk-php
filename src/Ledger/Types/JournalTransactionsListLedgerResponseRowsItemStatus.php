<?php

namespace Nordlet\Ledger\Types;

enum JournalTransactionsListLedgerResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
