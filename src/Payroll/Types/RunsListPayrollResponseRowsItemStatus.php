<?php

namespace Nordlet\Payroll\Types;

enum RunsListPayrollResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
    case Reversed = "reversed";
}
