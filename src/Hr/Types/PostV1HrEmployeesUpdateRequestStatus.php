<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesUpdateRequestStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
