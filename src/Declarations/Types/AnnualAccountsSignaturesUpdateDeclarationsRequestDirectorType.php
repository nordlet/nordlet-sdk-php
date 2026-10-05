<?php

namespace Nordlet\Declarations\Types;

enum AnnualAccountsSignaturesUpdateDeclarationsRequestDirectorType: string
{
    case ManagingCurrent = "managing_current";
    case ManagingFormer = "managing_former";
    case SupervisoryCurrent = "supervisory_current";
    case SupervisoryFormer = "supervisory_former";
}
