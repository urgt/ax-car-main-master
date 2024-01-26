<div class="logos_section container classes" data-aos="fade-up" data-aos-delay="100" id="classes">

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_a_car';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_a_car';
                    } else {
                        echo '/buy_a_car';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alcars.png" alt="All cars" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'All cars';

                        } elseif ($current_language == 'ru') {
                            echo 'Все авто';
                        } else {
                            echo 'All cars';
                        }
                        ?>
                    </a>
                </div>

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_class/business-class';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_class/business-class';
                    } else {
                        echo '/buy_class/business-class';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/businessclass.png"
                            alt="Business class" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Business class';

                        } elseif ($current_language == 'ru') {
                            echo 'Бизнес класс';
                        } else {
                            echo 'Business class';
                        }
                        ?>
                    </a>
                </div>

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_class/middle-class';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_class/middle-class';
                    } else {
                        echo '/buy_class/middle-class';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/middleclass.png"
                            alt="Middle class" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Middle class';

                        } elseif ($current_language == 'ru') {
                            echo 'Средний класс';
                        } else {
                            echo 'Middle class';
                        }
                        ?>
                    </a>
                </div>

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_class/sport-cars';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_class/sport-cars';
                    } else {
                        echo '/buy_class/sport-cars';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sportcars.png" alt="Sport cars" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Sport cars';

                        } elseif ($current_language == 'ru') {
                            echo 'Спорткары';
                        } else {
                            echo 'Sport cars';
                        }
                        ?>
                    </a>
                </div>

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_class/moto';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_class/moto';
                    } else {
                        echo '/buy_class/moto';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/moto_cat.png" alt="Motorcycles" class="moto_class" width="187px" height="141px"/><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Motorcycles';

                        } elseif ($current_language == 'ru') {
                            echo 'Мотоциклы';
                        } else {
                            echo 'Motorcycles';
                        }
                        ?>
                    </a>
                </div>


            </div>