<?php

namespace App\Util\StaticFunctions;

class CsvConverter
{
   public static function csvCoverter(array $headers, array &$array, $delimiter = ',', $enclosure = '"', $encloseAll = false, $nullToMysqlNull = false)
   {
      $delimiter_esc = preg_quote($delimiter, '/');
      $enclosure_esc = preg_quote($enclosure, '/');

      $title = implode(',', $headers);
      $output = [];
      $i = 0;

      $outputString = '';

      foreach ($array as $locationData) {
         foreach ($locationData as $field) {
            if ($field === null && $nullToMysqlNull) {
               $output[] = 'NULL';
               continue;
            }

            // Enclose fields containing $delimiter, $enclosure or whitespace
            if ($encloseAll || preg_match("/(?:${delimiter_esc}|${enclosure_esc}|\s)/", $field)) {

               $field = $enclosure . str_replace($enclosure, $enclosure . $enclosure, $field) . $enclosure;
            }

            $outputString .= trim($field) . $delimiter;
         }

         $outputString .=  "\r\n";
      }

      return $title . "\r\n" . "\r\n" . $outputString;
   }
}

?>