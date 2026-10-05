<?php

namespace Nordlet\Bank\Types;

enum MandatesGetBankResponseStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
