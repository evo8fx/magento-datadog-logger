<?php
/**
 * Emarketa.
 */

namespace Monkey\DatadogLogger\Model\Api\Record;

/**
 * Interface DatadogHttpInterface
 *
 * @package Monkey\DatadogLogger\Model\Api\Record
 */
interface DatadogHttpInterface
{
    /**
     * Method sendRecordToDataDog
     *
     * @param array $record
     * @return bool
     */
    public function sendRecordToHttpEndpoint($record);

    /**
     * Method getPostUrl
     *
     * @return string
     */
    public function getPostUrl();
}
