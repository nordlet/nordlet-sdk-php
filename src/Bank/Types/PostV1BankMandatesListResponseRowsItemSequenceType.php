<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesListResponseRowsItemSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
