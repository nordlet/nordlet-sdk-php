<?php

namespace Nordlet\Hr\Types;

enum EmployeesCreateHrResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
