<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsAnnualAccountsSignaturesCreateResponseDirectorType: string
{
    case ManagingCurrent = "managing_current";
    case ManagingFormer = "managing_former";
    case SupervisoryCurrent = "supervisory_current";
    case SupervisoryFormer = "supervisory_former";
}
