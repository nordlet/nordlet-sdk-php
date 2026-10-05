<?php

namespace Nordlet\Bank\Types;

enum MandatesCreateBankRequestScheme: string
{
    case Core = "CORE";
    case B2B = "B2B";
}
