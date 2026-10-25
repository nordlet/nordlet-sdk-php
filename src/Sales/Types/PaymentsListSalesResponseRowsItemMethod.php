<?php

namespace Nordlet\Sales\Types;

enum PaymentsListSalesResponseRowsItemMethod: string
{
    case BankTransfer = "bank_transfer";
    case Card = "card";
    case Cash = "cash";
}
