<?php

namespace Medboubazine\ReportTool;

use Medboubazine\ReportTool\Api\Report;
use Medboubazine\ReportTool\Helpers\CatchDefaultData;

final class ReportTool
{
    /**
     * Data
     *
     * @var array
     */
    public array $data = [];
    /**
     * Constructor
     */
    public function __construct(array $data = [])
    {
        $this->data = array_merge($data, CatchDefaultData::catch());
    }
    /**
     * Send report
     *
     * @return boolean
     */
    public function sendReport(): bool
    {
        $report = new Report();
        return $report->send($this->data);
    }
}
