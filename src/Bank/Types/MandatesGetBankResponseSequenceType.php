<?php

namespace Nordlet\Bank\Types;

enum MandatesGetBankResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
