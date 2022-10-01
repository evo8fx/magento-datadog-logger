<?php
/**
 * Emarketa.
 */

namespace Evo8fx\DatadogLogger\Model\Api\Record;

/**
 * Interface DatadogHttpInterface
 *
 * @package Evo8fx\DatadogLogger\Model\Api\Record
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
