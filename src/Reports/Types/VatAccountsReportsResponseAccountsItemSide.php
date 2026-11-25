<?php

namespace Nordlet\Reports\Types;

enum VatAccountsReportsResponseAccountsItemSide: string
{
    case Payable = "payable";
    case Receivable = "receivable";
}
