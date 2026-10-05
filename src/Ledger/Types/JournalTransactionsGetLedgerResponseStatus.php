<?php

namespace Nordlet\Ledger\Types;

enum JournalTransactionsGetLedgerResponseStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
