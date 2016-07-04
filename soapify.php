<?php

/**
 * This function is used to convert a key value array to a soap object.
 *
 * @param String $arr array to convert.
 *
 * @return Object
 */
function soapify($arr) {
    $soapobj = [];

    $type_map = [
        'integer' => XSD_INT,
        'double' => XSD_DOUBLE,
        'string' => XSD_STRING
    ];

    $arr_keys = array_keys($arr);

    foreach($arr_keys as $arr_key) {
        $value = $arr[$arr_key];
        $value_type = strtolower(gettype($value));
        $type = null;

        if (!isset($type_map[$value_type])) {
            $type = XSD_STRING;
        } else {
            $type = $type_map[$value_type];
        }


        $soapobj[] = new SoapVar($value, $type, null, null, $arr_key);
    }

    return $soapobj;
}
