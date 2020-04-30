<?php
/**
 * Umeng - Config
 * 
 * Umeng+, elite third party analytic app from China
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>

<p><?=___('Umeng+ Configuration') ?></p>

<schlix-config:textbox config-key='str_umeng_tracking_number' label='<?=___('Tracking Number') ?>' class='form-control' />
<schlix-config:radiogroup config-key="int_tracking_method" label="<?= ('Tracking Method') ?>">
    <schlix-config:option value="0"><?= ___h('Cnzz') ?></schlix-config:option>
    <schlix-config:option value="1"><?= ___h('Cnzz Icon Type 1') ?></schlix-config:option>
    <schlix-config:option value="2"><?= ___h('Cnzz Icon Type 2') ?></schlix-config:option>
    <schlix-config:option value="3"><?= ___h('Cnzz Icon Type 3') ?></schlix-config:option>
    <schlix-config:option value="4"><?= ___h('Basic analytic data(Vertical)') ?></schlix-config:option>
    <schlix-config:option value="5"><?= ___h('Basic analytic data(Currently Online)') ?></schlix-config:option>
    <schlix-config:option value="6"><?= ___h('Basic analytic data(Horizontal)') ?></schlix-config:option>
</schlix-config:radiogroup> 
<h3>Umeng will help you track your website easier</h3>
<p>
    Get your Umeng+ tracking number from <a href="https://www.umeng.com/" target="_blank"> Umeng</a>.
</p>

<h3>友盟+</h3>
<p>
    友盟+，国内领先的第三方全域数据智能服务商。专注为互联网企业提供一站式数据分析运营服务近10年。于2016年1月26日友盟、CNZZ及缔元信三家公司正式合并，业务全面整合，升级为友盟+。曾经是CNZZ的用户也可以使用有盟+，帮助客户挖掘数据价值，实现数据驱动业务增长。<a href="https://www.umeng.com/" target="_blank">点击这里</a>开始使用有盟+。
</p>