<?php
    include_once 'ReportAbstract.php';

    abstract class ReportDecorater implements Report
    {
        private $report;

        public function __construct(Report $report)
        {
            $this->report = $report;
        }

        public function SetReport($report)
        {
            $this->report = $report;
        }

        public function GetReport()
        {
            return $this->report;
        }

        abstract public function GenerateReport();
    }
?>