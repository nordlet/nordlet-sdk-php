<?php

namespace Nordlet\Bank\Types;

enum MandatesGetBankResponseScheme: string
{
    case Core = "CORE";
    case B2B = "B2B";
    case Bacs = "BACS";
    case Ppd = "PPD";
    case Ccd = "CCD";
}
