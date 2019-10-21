<?php
require_once( 'dbconfig.php');

function get_zolo_data($furnace_number) {
    try {
        $dl = get_zolo_furnace_data($furnace_number);
        return $dl;
    }
    catch(Exception $e) {
                $invalid_input_error_msg = ['error' => $e];
        return py2php_kwargs_function_call('new Response', [json::dumps($invalid_input_error_msg)], ["status" => 500,"mimetype" => 'application/json']);
    }
}
function get_zolo_furnace_data($furnace_number) {
    if (($furnace_number == '14')) {
        $query = textwrap::fill(textwrap::dedent(textwrap::dedent($cfg->get_query_14))->replace('
', ' '));
        return __get_data($query);
    }
    return $str->format('{0} not implemented on ZOLO yet', $furnace_number);
}
function __get_data($query) {
    $cnxn = pyodbc::connect($cfg->cnxn);
    $cursor = $cnxn->cursor();
    $cursor->execute($query);
    foreach( pyjslib_list($cursor) as $row ) {
        if (($row == null)) {
            return $row;
        }
        $results = pyjslib_dict();
        $results['DateTime'] = $row->DateTime;
        $path_num = 1;
        foreach( pyjslib_list(pyjslib_range(0, 100, 5)) as $col_idx ) {
            $laser_path = pyjslib_dict();
            $laser_path['Path' . pyjslib_str($path_num)->zfill(2) . '_14.CO_Concentration'] = $row[($col_idx + 1)];
            $laser_path['Path' . pyjslib_str($path_num)->zfill(2) . '_14.O2_Concentration'] = $row[($col_idx + 2)];
            $laser_path['Path' . pyjslib_str($path_num)->zfill(2) . '_14.SignalStrength'] = $row[($col_idx + 3)];
            $laser_path['Path' . pyjslib_str($path_num)->zfill(2) . '_14.Status'] = $row[($col_idx + 4)];
            $laser_path['Path' . pyjslib_str($path_num)->zfill(2) . '_14.TempF'] = $row[($col_idx + 5)];
            $results['Path' . pyjslib_str($path_num)->zfill(2) . '_14'] = $laser_path;
            $path_num += 1;
        }
        return py2php_kwargs_function_call('json::dumps', [$results], ["indent" => 4]);
    }
}
?>