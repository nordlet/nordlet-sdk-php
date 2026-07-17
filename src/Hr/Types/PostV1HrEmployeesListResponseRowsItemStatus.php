<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesListResponseRowsItemStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
