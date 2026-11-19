<?php

namespace Nordlet\Bank\Types;

enum MandatesListBankResponseRowsItemAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
