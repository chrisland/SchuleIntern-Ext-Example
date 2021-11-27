<?php

/**
 *
 */
class extExampleWidgetCounter extends Widget
{

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    public function render() {
        return '<a href="index.php" class="btn">
                    <i class="fa fa-cogs"></i>
                    <span class="label bg-red">1</span>
                </a>';
    }

}