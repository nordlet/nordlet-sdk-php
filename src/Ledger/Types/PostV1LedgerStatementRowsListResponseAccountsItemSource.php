<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerStatementRowsListResponseAccountsItemSource: string
{
    case Mapping = "mapping";
    case Default_ = "default";
}
