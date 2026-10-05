<?php

namespace Nordlet\Hr\Types;

enum EmployeesGetHrResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
