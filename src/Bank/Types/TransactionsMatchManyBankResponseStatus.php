<?php

namespace Nordlet\Bank\Types;

enum TransactionsMatchManyBankResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
