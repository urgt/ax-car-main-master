<?php
$env = $args['env'];

$current_language = pll_current_language();


?>
<div class="filter_container">
    <?php
    if ($env == 'prod') {
        if ($current_language == 'en') {
            ?>
            <div style="order: 1">
                <?php echo do_shortcode('[fe_widget id="4250"]') ?>
            </div>
            <div style="order: 2">
                <?php echo do_shortcode('[fe_widget id="4254"]') ?>
            </div>
            <div style="order: 3">
                <?php echo do_shortcode('[fe_widget id="4259"]') ?>
            </div>
            <?php
        } else if ($current_language == 'ru') {
            ?>

            <?php
        }
    }
    if ($env == 'staging') {
        if ($current_language == 'en') {
            ?>
            <div style="order: 1">
                <?php echo do_shortcode('[fe_widget id="3447"]') ?>
            </div>
            <div style="order: 2">
                <?php echo do_shortcode('[fe_widget id="3451"]') ?>
            </div>
            <div style="order: 3">
                <?php echo do_shortcode('[fe_widget id="3412"]') ?>
            </div>
            <?php
        } else if ($current_language == 'ru') {
            ?>
             <div style="order: 1">
                <?php echo do_shortcode('[fe_widget id="3497"]') ?>
            </div>
            <div style="order: 2">
                <?php echo do_shortcode('[fe_widget id="3501"]') ?>
            </div>
            <div style="order: 3">
                <?php echo do_shortcode('[fe_widget id="3510"]') ?>
            </div>
            <?php
        }
    }

    if ($env == 'local') {
        if ($current_language == 'en') {
            ?>
            <div style="order: 1">
                <?php echo do_shortcode('[fe_widget id="3447"]') ?>
            </div>
            <div style="order: 2">
                <?php echo do_shortcode('[fe_widget id="3451"]') ?>
            </div>
            <div style="order: 3">
                <?php echo do_shortcode('[fe_widget id="3412"]') ?>
            </div>
            <?php
        } else if ($current_language == 'ru') {
            ?>
             <div style="order: 1">
                <?php echo do_shortcode('[fe_widget id="3497"]') ?>
            </div>
            <div style="order: 2">
                <?php echo do_shortcode('[fe_widget id="3501"]') ?>
            </div>
            <div style="order: 3">
                <?php echo do_shortcode('[fe_widget id="3510"]') ?>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php

?>