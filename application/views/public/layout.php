<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 7/19/17
 * Time: 4:14 PM
 */

    $this->load->view($this->config->item('gudiva_template_dir_public') . 'header');
    $this->load->view($this->config->item('gudiva_template_dir_public') . 'content');
    $this->load->view($this->config->item('gudiva_template_dir_public') . 'footer');
