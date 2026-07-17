<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesGetResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
