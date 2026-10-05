<?php

namespace Nordlet\Hr\Types;

enum EmployeesListHrResponseRowsItemStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
