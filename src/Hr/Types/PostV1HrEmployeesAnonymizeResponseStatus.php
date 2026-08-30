<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesAnonymizeResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
