<?php

namespace OscarTeam\ElenaPhp\DataObjects;

class CheckExecution extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $type;
    public readonly ?string $performedAt;
    public readonly ?string $status;
    /** @var CheckExecutionField[]  */
    public readonly ?array $extraFields;
    public readonly ?string $message;
    public readonly ?string $pdfReportUrl;
    public readonly ?string $htmlReportUrl;
}