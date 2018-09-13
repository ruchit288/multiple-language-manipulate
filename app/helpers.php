<?php

if (!function_exists('checkDatabaseConnection')) {

    /**
     * @return bool
     */
    function checkDatabaseConnection()
    {
        try {
            DB::connection()->reconnect();

            return true;
        } catch (Exception $ex) {
            return false;
        }
    }
}

if (!function_exists('dbTrans')) {

    /**
     * @param $lang
     * @param $tableName
     * @return string
     */
    function dbTrans($lang, $tableName)
    {
        return $lang.'_'.config('config-variables.field_post_fix.'.$tableName);
    }
}

if (!function_exists('pluckDBTrans')) {

    /**
     * @param $query
     * @param $fieldName
     *
     * @return mixed
     */
    function pluckDBTrans($query, string $fieldName)
    {
        return $query->where($fieldName, '!=', null)
            ->pluck($fieldName, 'id')
            ->toArray();
    }
}