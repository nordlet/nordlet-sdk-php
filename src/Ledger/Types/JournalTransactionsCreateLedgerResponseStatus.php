<?php

namespace Nordlet\Ledger\Types;

enum JournalTransactionsCreateLedgerResponseStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
