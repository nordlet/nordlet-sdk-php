<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesCancelResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
