<?php
namespace Block;
/**
 * Umeng - Main Class
 * 
 * Umeng+, elite third party analytic app from China
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package umeng
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    http://github.com/EdwardG21
 */
class Umeng extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                $umeng_tracking_number = $this->config['str_umeng_tracking_number'];
                $umeng_tracking_method = (int) $this->config['int_tracking_method'];
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
