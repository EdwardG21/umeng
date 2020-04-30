<?php
/**
 * Umeng - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php $umeng_tracking_method = (int) $umeng_tracking_method; ?>
<?php if (!empty($umeng_tracking_number)): ?>
    <?php if ($umeng_tracking_method === 0): ?>
        <script type="text/javascript" src="https://s4.cnzz.com/z_stat.php?id=<?= ___h($umeng_tracking_number) ?>&web_id=<?= ___h($umeng_tracking_number) ?>">
        </script>
    <?php endif ?>
    
    <?php if ($umeng_tracking_method === 1): ?>
        <script type="text/javascript">
            document.write(unescape("%3Cspan id='cnzz_stat_icon_<?= ___h($umeng_tracking_number) ?>'%3E%3C/span%3E%3Cscript src='https://s4.cnzz.com/z_stat.php%3Fid%3D<?= ___h($umeng_tracking_number) ?>%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
        </script>
    <?php endif ?>
        
    <?php if ($umeng_tracking_method === 2): ?>
        <script type="text/javascript">
            document.write(unescape("%3Cspan id='cnzz_stat_icon_<?= ___h($umeng_tracking_number) ?>'%3E%3C/span%3E%3Cscript src='https://s4.cnzz.com/z_stat.php%3Fid%3D<?= ___h($umeng_tracking_number) ?>%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
        </script>
    <?php endif ?>
    
        
    <?php if ($umeng_tracking_method === 3): ?>
        <script type="text/javascript">
            document.write(unescape("%3Cspan id='cnzz_stat_icon_<?= ___h($umeng_tracking_number) ?>'%3E%3C/span%3E%3Cscript src='https://s4.cnzz.com/z_stat.php%3Fid%3D<?= ___h($umeng_tracking_number) ?>%26show%3Dpic2' type='text/javascript'%3E%3C/script%3E"));
        </script>
    <?php endif ?>
        
    <?php if ($umeng_tracking_method === 4): ?>
        <script type="text/javascript">
            document.write(unescape("%3Cspan id='cnzz_stat_icon_<?= ___h($umeng_tracking_number) ?>'%3E%3C/span%3E%3Cscript src='https://s4.cnzz.com/z_stat.php%3Fid%3D<?= ___h($umeng_tracking_number) ?>%26online%3D1' type='text/javascript'%3E%3C/script%3E"));
        </script>
    <?php endif ?>
        
    <?php if ($umeng_tracking_method === 5): ?>
        <script type="text/javascript">
            document.write(unescape("%3Cspan id='cnzz_stat_icon_<?= ___h($umeng_tracking_number) ?>'%3E%3C/span%3E%3Cscript src='https://s4.cnzz.com/z_stat.php%3Fid%3D<?= ___h($umeng_tracking_number) ?>%26online%3D2' type='text/javascript'%3E%3C/script%3E"));
        </script>
    <?php endif ?>
        
    <?php if ($umeng_tracking_method === 6): ?>
        <script type="text/javascript">
            document.write(unescape("%3Cspan id='cnzz_stat_icon_<?= ___h($umeng_tracking_number) ?>'%3E%3C/span%3E%3Cscript src='https://s4.cnzz.com/z_stat.php%3Fid%3D<?= ___h($umeng_tracking_number) ?>%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));
        </script>
    <?php endif ?>
    
    <?php else: ?>
        <x-ui:alert type="danger">
            <?= ___('Umeng tracking number has not been provided') ?>
        </x-ui:alert>
<?php endif ?>
