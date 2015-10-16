<?php
$pagecontent = $_GET['pagetitle'];

if ($pagecontent == NULL) {
    $pagecontent = "home";
}
include "_layouts/default.inc";

