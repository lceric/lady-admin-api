<?php
  /**
   * 跨域处理
   */
  header("Content-Type:application/json;charset=utf-8");
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS');
?>