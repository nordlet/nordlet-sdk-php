<?php

namespace Nordlet\Bank\Types;

enum MandatesCreateBankRequestSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
