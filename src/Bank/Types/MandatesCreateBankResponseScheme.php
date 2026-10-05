<?php

namespace Nordlet\Bank\Types;

enum MandatesCreateBankResponseScheme: string
{
    case Core = "CORE";
    case B2B = "B2B";
}
