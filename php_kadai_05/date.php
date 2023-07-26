<?php
class DatePrinter {
    public $format;

    public function __construct($format) {
        $this->format = $format;
    }

    public function printDate() {
        echo "<span class='date'>" . date($this->format) . "</span>";
    }
}