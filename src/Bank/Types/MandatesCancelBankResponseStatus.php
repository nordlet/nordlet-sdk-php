<?php

namespace Nordlet\Bank\Types;

enum MandatesCancelBankResponseStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
