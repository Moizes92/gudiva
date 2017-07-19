<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 7/19/17
 * Time: 4:13 PM
 */
    if (isset($page)) {
        if (isset($module)) {
            $this->load->view("$module/$page");
        } else {
            $this->load->view($page);
        }
    }
