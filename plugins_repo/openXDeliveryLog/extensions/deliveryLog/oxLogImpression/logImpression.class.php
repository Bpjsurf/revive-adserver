<?php

require_once MAX_PATH . '/extensions/deliveryLog/logCommon.php';

class Plugins_DeliveryLog_OxLogImpression_LogImpression extends Plugins_DeliveryLog_LogCommon
{
    function getDependencies()
    {
        return array(
            'deliveryLog:oxLogImpression:logImpression' => array(
                'deliveryDataPrepare:oxDeliveryDataPrepare:dataCommon',
            )
        );
    }

    function getBucketName()
    {
        return 'data_bucket_impression';
    }

    public function getTableBucketColumns()
    {
        $columns = array(
            'interval_start' => self::TIMESTAMP_WITHOUT_ZONE ,
            'creative_id' => self::INTEGER,
            'zone_id' => self::INTEGER,
            'count' => self::INTEGER
        );
    }
}

?>