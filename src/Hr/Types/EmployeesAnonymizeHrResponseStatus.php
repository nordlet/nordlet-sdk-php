<?php

namespace Nordlet\Hr\Types;

enum EmployeesAnonymizeHrResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
