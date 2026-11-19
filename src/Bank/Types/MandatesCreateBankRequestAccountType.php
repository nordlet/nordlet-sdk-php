<?php

namespace Nordlet\Bank\Types;

enum MandatesCreateBankRequestAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
