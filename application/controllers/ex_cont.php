<?php
function elfinder_init()
{
  $this->load->helper('path');
  $opts = array(
    // 'debug' => true, 
    'roots' => array(
      array( 
        'driver' => 'LocalFileSystem', 
        'path'   => set_realpath('modules'), 
        'URL'    => site_url('modules') . '/'
        // more elFinder options here
      ) 
    )
  );
  $this->load->library('elfinder_lib', $opts);
}