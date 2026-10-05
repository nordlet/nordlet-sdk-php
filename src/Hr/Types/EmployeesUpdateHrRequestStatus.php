<?php

namespace Nordlet\Hr\Types;

enum EmployeesUpdateHrRequestStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
