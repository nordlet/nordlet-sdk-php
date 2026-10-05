<?php

namespace Nordlet\Ledger\Types;

enum JournalTransactionsListLedgerRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
