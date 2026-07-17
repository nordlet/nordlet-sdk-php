<?php

namespace Nordlet\Account\Types;

enum PostV1AccountInvitesCreateRequestRole: string
{
    case Admin = "admin";
    case Accountant = "accountant";
    case Manager = "manager";
    case Developer = "developer";
    case Viewer = "viewer";
}
