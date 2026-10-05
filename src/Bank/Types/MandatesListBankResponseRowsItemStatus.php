<?php

namespace Nordlet\Bank\Types;

enum MandatesListBankResponseRowsItemStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
