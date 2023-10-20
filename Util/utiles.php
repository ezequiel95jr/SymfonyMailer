<?php
function data_submitted() {
    $_AAux = array();
    if (!empty($_POST)) {
        $_AAux =$_POST;
    } else {
        if (!empty($_GET)) {
            $_AAux = $_GET;
        }
    }
    return $_AAux;
}