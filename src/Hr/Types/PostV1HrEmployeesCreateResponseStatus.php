<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesCreateResponseStatus: string
{
    case Active = "active";
    case Terminated = "terminated";
}
