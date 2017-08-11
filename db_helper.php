<?php
// get contents of a file into a string
$filename = "./mysql.conf";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$db_arr = explode("\n", $contents);
$db_arr_new = array();
foreach ($db_arr as $key => $val) {
	if(empty($val)) continue;
	$cur_db = explode("=>", $val);
	#print_r($cur_db);
	@$db_arr_new[trim($cur_db[0])] = trim($cur_db[1]);
}
#print_r($contents);
#print_r($db_arr);
#print_r($db_arr_new);
$conn = $db_arr_new['stp_test_0'];
$ = parse_url($conn);
print_r($res);