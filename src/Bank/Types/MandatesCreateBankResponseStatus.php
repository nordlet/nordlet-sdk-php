<?php

namespace Nordlet\Bank\Types;

enum MandatesCreateBankResponseStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
