<?php

namespace Nordlet\Bank\Types;

enum MandatesUpdateBankResponseStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
