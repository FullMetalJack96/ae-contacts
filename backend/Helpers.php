<?php
  class Helpers{

    function checkForDuplicateEntry($f3, $contactEntry, $searchType){
      switch ($searchType) {
        case $f3->get('SEARCH_CONTACT'):
          $result = $f3->get('DB')->exec("SELECT name FROM contacts");
          break;

        case $f3->get('SEARCH_CATEGORY'):
          $result = $f3->get('DB')->exec("SELECT name FROM category");
          break;
      }

      $nameArray = array();
      foreach ($result as $key => $value) {
        array_push($nameArray, $value['name']);
      }
        return (in_array($contactEntry,$nameArray));
    }

    function exportDatabaseToCSV($f3){
      $result = $f3->get('DB')->exec("SELECT category.name as cat_name, contacts.* FROM category
                                                    JOIN contacts ON contacts.category_id = category.id");
      if (!$result) die('Couldn\'t fetch records');
      $fp = fopen('php://output', 'w');
      if ($fp && $result) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="export.csv"');
        header('Pragma: no-cache');
        header('Expires: 0');
        foreach ($result as $key => $value) {
              fputcsv($fp, $value);
        }
        die;
      }
    }

  }
?>
