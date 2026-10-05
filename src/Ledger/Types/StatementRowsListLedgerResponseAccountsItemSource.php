<?php

namespace Nordlet\Ledger\Types;

enum StatementRowsListLedgerResponseAccountsItemSource: string
{
    case Mapping = "mapping";
    case Default_ = "default";
}
