<?php

namespace Nordlet\Bank\Types;

enum MandatesListBankResponseRowsItemSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
