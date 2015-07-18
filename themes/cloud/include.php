<?php

/**
 * This file is included by theme master php files.
 * It's used to generate the proper "includes" statements for javascript, css, etc
 *
 * PHP version 5
 *
 * @category PHP
 * @package  Cloud
 * @author   jason <titanking@phpdevshell.org>
 * @author   greg <greg@phpdevshell.org>
 * @license  http://www.gnu.org/licenses/lgpl.html LGPL
 * @link     http://www.phpdevshell.org
 */

/** @var $this PHPDS_core */

try {
    // require the Pines notifications
    $this->template->activatePlugin('GUI_pnotify');
} catch (Exception $e) {
    $this->debug->warning($e->getMessage());
}

/** @noinspection PhpUndefinedVariableInspection */
$url = !empty($aurl) ? $aurl : $template->outputAbsoluteURL('return');

if (empty($skin)) {
    /** @noinspection PhpUndefinedVariableInspection */
    $skin = $template->outputSkin('return');
}

if ($this->configuration['development']) {
    ?>

    <link rel="stylesheet"
          href="<?php echo $url ?>/themes/cloud/css/reset.css"
          type="text/css"
          media="screen, projection"/>
    <link rel="stylesheet"
          href="<?php echo $url ?>/themes/cloud/jquery/css/<?php echo $skin; ?>/jquery-ui.css?v314a"
          type="text/css"
          media="screen, projection"/>
    <link rel="stylesheet"
          href="<?php echo $url ?>/themes/cloud/css/combined.css?v=314a"
          type="text/css"
          media="screen, projection"/>
    <script type="text/javascript"
            src="<?php echo $url ?>/themes/cloud/jquery/js/jquery.js?v=314a"></script>
    <script type="text/javascript"
            src="<?php echo $url ?>/themes/cloud/jquery/js/jquery-ui.js?v=314a"></script>

    <script type="text/javascript" src="<?php echo $url ?>/themes/cloud/js/PHPDS.js?v=314a"></script>

    <?php
} else {
    ?>

        <link rel="stylesheet"
          href="<?php echo $url ?>/themes/cloud/css/reset.css"
          type="text/css"
          media="screen, projection"/>
        <link rel="stylesheet"
          href="<?php echo $url ?>/themes/cloud/jquery/css/<?php echo $skin; ?>/jquery-ui.css?v314a"
          type="text/css"
          media="screen, projection"/>
        <link rel="stylesheet"
          href="<?php echo $url ?>/themes/cloud/css/combined.css?v=314a"
          type="text/css"
          media="screen, projection"/>
        <script type="text/javascript"
            src="<?php echo $url ?>/themes/cloud/PHPDS-combined.min.js?v=314a"></script>

    <?php
}
?>


