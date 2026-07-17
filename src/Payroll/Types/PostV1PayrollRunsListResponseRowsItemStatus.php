<?php

namespace Nordlet\Payroll\Types;

enum PostV1PayrollRunsListResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
