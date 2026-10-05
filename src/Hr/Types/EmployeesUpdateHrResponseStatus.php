<?php

namespace Nordlet\Hr\Types;

enum EmployeesUpdateHrResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
