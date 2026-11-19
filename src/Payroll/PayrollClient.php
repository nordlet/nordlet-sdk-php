<?php

namespace Nordlet\Payroll;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Payroll\Requests\DepartmentsCreatePayrollRequest;
use Nordlet\Payroll\Types\DepartmentsCreatePayrollResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Payroll\Requests\DepartmentsListPayrollRequest;
use Nordlet\Payroll\Types\DepartmentsListPayrollResponse;
use Nordlet\Payroll\Requests\SchedulesCreatePayrollRequest;
use Nordlet\Payroll\Types\SchedulesCreatePayrollResponse;
use Nordlet\Payroll\Requests\SchedulesListPayrollRequest;
use Nordlet\Payroll\Types\SchedulesListPayrollResponse;
use Nordlet\Payroll\Requests\PaymentTypesListPayrollRequest;
use Nordlet\Payroll\Types\PaymentTypesListPayrollResponse;
use Nordlet\Payroll\Requests\FrequenciesListPayrollRequest;
use Nordlet\Payroll\Types\FrequenciesListPayrollResponse;
use Nordlet\Payroll\Requests\CalcPayrollRequest;
use Nordlet\Payroll\Types\CalcPayrollResponse;
use Nordlet\Payroll\Requests\RunsCreatePayrollRequest;
use Nordlet\Payroll\Types\RunsCreatePayrollResponse;
use Nordlet\Payroll\Requests\RunsGetPayrollRequest;
use Nordlet\Payroll\Types\RunsGetPayrollResponse;
use Nordlet\Payroll\Requests\RunsListPayrollRequest;
use Nordlet\Payroll\Types\RunsListPayrollResponse;
use Nordlet\Payroll\Requests\LinesAttendancePayrollRequest;
use Nordlet\Payroll\Types\LinesAttendancePayrollResponse;
use Nordlet\Payroll\Requests\RunsApprovePayrollRequest;
use Nordlet\Payroll\Types\RunsApprovePayrollResponse;
use Nordlet\Payroll\Requests\RunsReversePayrollRequest;
use Nordlet\Payroll\Types\RunsReversePayrollResponse;
use Nordlet\Payroll\Requests\RunsCancelPayrollRequest;
use Nordlet\Payroll\Types\RunsCancelPayrollResponse;
use Nordlet\Payroll\Requests\PaymentsExportPayrollRequest;
use Nordlet\Payroll\Types\PaymentsExportPayrollResponse;

class PayrollClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * Creates a department with a code and a name; answers 409 when the code already exists.
     *
     * @param DepartmentsCreatePayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DepartmentsCreatePayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function departmentsCreate(DepartmentsCreatePayrollRequest $request, ?array $options = null): ?DepartmentsCreatePayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/departments/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DepartmentsCreatePayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the company's departments ordered by code.
     *
     * @param DepartmentsListPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DepartmentsListPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function departmentsList(DepartmentsListPayrollRequest $request = new DepartmentsListPayrollRequest(), ?array $options = null): ?DepartmentsListPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/departments/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DepartmentsListPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Creates a work schedule with a code, a name and `hoursPerWeek` (default 40); answers 409 when the code already exists.
     *
     * @param SchedulesCreatePayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SchedulesCreatePayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function schedulesCreate(SchedulesCreatePayrollRequest $request, ?array $options = null): ?SchedulesCreatePayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/schedules/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SchedulesCreatePayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the company's work schedules ordered by code.
     *
     * @param SchedulesListPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SchedulesListPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function schedulesList(SchedulesListPayrollRequest $request = new SchedulesListPayrollRequest(), ?array $options = null): ?SchedulesListPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/schedules/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SchedulesListPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Reads the payment types of the company country's payroll engine, each with the labels of the taxes, contributions and reporting lines it is subject to (`applies`), and the default type an untyped payment falls under. These codes are what `payroll/calc` and the additions of `payroll/runs/create` accept as `paymentType`. Answers 422 when Nordlet has no payroll engine for the company's country.
     *
     * @param PaymentTypesListPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PaymentTypesListPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function paymentTypesList(PaymentTypesListPayrollRequest $request = new PaymentTypesListPayrollRequest(), ?array $options = null): ?PaymentTypesListPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/payment-types/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PaymentTypesListPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Reads the pay frequencies the company country's payroll engine calculates, the values `payroll/runs/create` takes as `frequency` and `hr/contracts/create` as `payFrequency`. Answers 422 when Nordlet has no payroll engine for the company's country.
     *
     * @param FrequenciesListPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FrequenciesListPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function frequenciesList(FrequenciesListPayrollRequest $request = new FrequenciesListPayrollRequest(), ?array $options = null): ?FrequenciesListPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/frequencies/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return FrequenciesListPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Runs the company country's payroll engine once on a taxable base at a date, with the employee settings given in the body instead of an employee record, and returns the allowance, income tax, contributions, components and net; nothing is saved. `payments` passes typed payments to the engine; each `paymentType` must be a code from `payroll/payment-types/list` (422 otherwise). Answers 422 when Nordlet has no payroll engine for the company's country.
     *
     * @param CalcPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CalcPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function calc(CalcPayrollRequest $request, ?array $options = null): ?CalcPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/calc",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CalcPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Creates a draft payroll run for a pay period, computing each line with the company country's payroll engine, the employee's approved runs of the tax year before the period and of the two previous tax years, the timesheets of the period and `payDate` (default the last day of the period). A `monthly` run (the default `frequency`) takes `year` and `month`; a `semimonthly` run takes a `periodStart` on the 1st (to the 15th) or the 16th (to the month end), and a `weekly`, `biweekly` or `four_weekly` run a `periodStart` from which the period runs 7, 14 or 28 days. `payroll/frequencies/list` gives the frequencies the company country's engine calculates; the engine also sets the run's `taxYear` and `taxPeriod` (by default the calendar year and the month). A run of a frequency other than monthly gets the year and month of its period end. Without `lines`, every employee whose contract has the run's pay frequency and overlaps the period gets a line, whatever the employee's status: the gross is the contract's salary for one period (a monthly, weekly or yearly salary brought to a year and divided by the periods of the year: 12, 24, 13, 26 or 52) reduced to the paid working days of the contract and the timesheets, unless `grossOverrides` sets it; the per diems of approved business trips ending in the period are added untaxed and the trips linked to the run; for a Lithuanian company the car benefit in kind (`includeNatura`) and the compensation for unused leave of a contract ending in the period are added. The timesheets count only when every month the period touches has one. With `lines`, only the given employees are computed with their gross, additions and deductions, and the per diems of their approved, unlinked business trips ending in the period are added untaxed and the trips linked to the run; a taxable addition may carry a `paymentType` from `payroll/payment-types/list` and `hours`. Answers 422 when the country has no engine or its engine does not calculate the frequency, the period is not given the way its frequency needs, an employee is given twice, has two contracts in the period, has no contract and no gross, or is paid by the hour or day without a gross; 409 when a run of the same frequency already covers part of the period or the accounting period is locked.
     *
     * @param RunsCreatePayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RunsCreatePayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function runsCreate(RunsCreatePayrollRequest $request = new RunsCreatePayrollRequest(), ?array $options = null): ?RunsCreatePayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/runs/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RunsCreatePayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Reads a payroll run with its lines.
     *
     * @param RunsGetPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RunsGetPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function runsGet(RunsGetPayrollRequest $request, ?array $options = null): ?RunsGetPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/runs/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RunsGetPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists payroll runs without their lines; filterable by `status`, `year`, `month`, `frequency` and `taxYear`, sortable by `createdAt`, `year`, `month`, `period` (the year, then the month), `periodStart`, `status`, `grossTotal`, `incomeTaxTotal`, `contributions` (the employee plus the employer contributions) and `netTotal`.
     *
     * @param RunsListPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RunsListPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function runsList(RunsListPayrollRequest $request = new RunsListPayrollRequest(), ?array $options = null): ?RunsListPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/runs/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RunsListPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The days and hours worked, the days on the register and the average hourly earnings that some countries report per employment. The Czech monthly employer report asks for all four. They can be set while the run is a draft.
     *
     * @param LinesAttendancePayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LinesAttendancePayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function linesAttendance(LinesAttendancePayrollRequest $request, ?array $options = null): ?LinesAttendancePayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/lines/attendance",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LinesAttendancePayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Posts the run's journal entry dated the last day of the run's period and sets the status to `approved`: the wage expense (net pay, income tax, employee contributions and deductions) and the employer contributions are debited; the net payable, the income tax, the social contributions (on one account, or split between the employee and employer accounts when their codes differ) and the deductions are credited. The accounts default to the payroll accounts of the company's chart template; each can be given per call (`incomeTaxAccountCode` and `socialContributionsAccountCode` among them). Answers 409 when the run is not a draft or the accounting period is locked, 422 when the run has no lines or nothing to post, and emits `payroll_run.approved`. For an Irish company with the automation of the `ie-payroll-withholding` deadline switched on, the month's payroll submission is sent at once and a failure is added to the run's `warnings`. For a Lithuanian company the unused leave days a line paid as compensation, recorded per balance year when the run was created, are added to the used days of the leave balances. For a US company whose filing option `usDepositSchedule` is `semiweekly`, the federal tax deposit of the run's pay date is added to the calendar (`us-tax-deposit-semiweekly`, the pay date as period), due on the Wednesday after a Wednesday to Friday payday and the Friday after a Saturday to Tuesday payday, moved past District of Columbia legal holidays. Undo with `payroll/runs/reverse`, pay with `payroll/payments/export`.
     *
     * @param RunsApprovePayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RunsApprovePayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function runsApprove(RunsApprovePayrollRequest $request, ?array $options = null): ?RunsApprovePayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/runs/approve",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RunsApprovePayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Posts a journal entry dated the last day of the run's period that mirrors the run's entry (debits and credits swapped), sets the status to `reversed` with the reason, and releases the business trips the run paid so the next run picks them up again; the leave days the run marked used as compensation for unused leave are given back to the leave balances. A US run removes the semiweekly federal tax deposit of its pay date from the calendar unless another approved run has the same pay date. Answers 409 when the run is not approved, when part of it is matched to bank payments (`paidAmount`, unmatch them first) or when the accounting period is locked. Emits `payroll_run.reversed`.
     *
     * @param RunsReversePayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RunsReversePayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function runsReverse(RunsReversePayrollRequest $request, ?array $options = null): ?RunsReversePayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/runs/reverse",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RunsReversePayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Deletes a draft run with its lines and releases the business trips linked to it; answers 409 when the run is not a draft. An approved run is undone with `payroll/runs/reverse`.
     *
     * @param RunsCancelPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RunsCancelPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function runsCancel(RunsCancelPayrollRequest $request, ?array $options = null): ?RunsCancelPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/runs/cancel",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RunsCancelPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds a payment file for an approved run: one transfer from the chosen bank account to each employee's account for the line's net when it is positive, with a remittance text in `locale` (default the locale of the calling user) and the run period. The format follows the bank account: a GBP account of a UK company with a sort code and account number gets a Bacs Standard 18 Direct Credit file (needs `paymentFileSettings.serviceUserNumber`; the employee's `bankCode` is the 6-digit sort code and `bankAccountNumber` the 8-digit account number; `executionDate` is the day the pay arrives, a Bacs working day whose processing day is after today, default the earliest), a USD account of a US company with a routing number and account number gets a Nacha ACH file of PPD credits with the entry description PAYROLL (needs `paymentFileSettings.immediateOrigin` and `companyIdentification`; the employee's `bankCode` is the 9-digit routing number, plus `bankAccountNumber` and `bankAccountType`; default `executionDate` the company's current date), and an account with an IBAN gets ISO 20022 pain.001.001.03, a SEPA credit transfer in EUR and a generic pain.001 in other currencies (the employee's IBAN; default `executionDate` the company's current date). Answers 409 when the run is not approved, and 422 when the bank account fits no format or is not in the company's base currency, an employee lacks the account details the format needs (`hr/employees/update`) or no line has a positive net. The file is returned in `content`, with `format`, `fileName` and `contentType`; nothing is sent to the bank.
     *
     * @param PaymentsExportPayrollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PaymentsExportPayrollResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function paymentsExport(PaymentsExportPayrollRequest $request, ?array $options = null): ?PaymentsExportPayrollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/payroll/payments/export",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PaymentsExportPayrollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
