<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesUpdateResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
