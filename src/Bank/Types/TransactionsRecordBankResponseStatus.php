<?php

namespace Nordlet\Bank\Types;

enum TransactionsRecordBankResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
