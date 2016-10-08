<?php

function connect_to_database() {
	$host="localhost"; // Host name 
	$username="application"; // Mysql username 
	$password="wavelink2014"; // Mysql password 
	$db_name="readyreadymoving"; // Database name 
	// Connect to server and select databse.
	$c = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect"); 
	mysqli_set_charset($c, "utf8mb4");
	return $c;
}

function get_settings($c, $sql) {
	$settings = mysqli_query($c, "SELECT * FROM settings");
	if (!$settings) { echo 'Could not load settings data.'; exit; }
	$setting = array(); 
	while($row = mysqli_fetch_assoc($settings)) { 
		$setting[$row['code']] = $row['value']; 
	}
	return $setting;
}

function get_seo($c, $page, $setting) {
	$row = mysqli_fetch_assoc(mysqli_query($c, "SELECT * FROM seo WHERE page='$page'"));
	if (!$row) { return; }
	$metatags = <<< EOF
	    		<title>{title}</title>
				<meta name="description" content="{description}">
				<meta name="keywords" content="{keywords}">
				<meta name="author" content="{title}">
				<meta name="robots" content="index, follow">
				<meta property="og:description" content="{description}" />
				<meta property="og:image" content="{logo}" />
				<meta property="og:image:type" content="image/png" />
				<meta property="og:title" content="{title}" />
				<meta property="og:url" content="{url}" />
				<meta property="og:site_name" content="{title}" />
				<meta property="og:type" content="company" />
				<meta name="twitter:card" content="summary_large_image">
				<meta name="twitter:site" content="{twitter}">
				<meta name="twitter:creator" content="{twitter}">
				<meta name="twitter:title" content="{title}">
				<meta name="twitter:description" content="{description}">
				<meta name="twitter:image:src" content="{logo}">
EOF;
	$metatags = str_replace("{title}", $row['title'], $metatags);
	$metatags = str_replace("{description}", $row['description'], $metatags); 
	$metatags = str_replace("{keywords}", $row['keywords'], $metatags);
	$metatags = str_replace("{logo}", "http://".$_SERVER['HTTP_HOST'].$setting['logo'], $metatags);
	$metatags = str_replace("{url}", "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], $metatags);
	$metatags = str_replace("{twitter}", $setting['twitter_link'], $metatags);
	return $metatags;
}

function mysqli_result($mysqli, $sql) {
    $result = $mysqli->query($sql);
    $value = $result->fetch_array(MYSQLI_NUM);
    return is_array($value) ? $value[0] : "";
}

function getExtension($str) {
	$i = strrpos($str,".");
	if (!$i) { return ""; } 
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	return $ext;
}

function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);
    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}

?>