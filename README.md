#SimpleQuoteManager

![Logo SimpleQuoteManager](assets/style/img/logo-sqm/logo-sqm-350-150.png "SQM project logo")

##About
**SimpleQuoteManager** is a simple, intuitive, free and open source web based invoice management system developed with freelancers in mind.

##Install
First, you need to get the submodules:

    git submodule init
    git submodule update

dompdf has some submodules too:

    cd application/helpers/dompdf
    git submodule init
    git submodule update


You then need to use Bower and Grunt:

    bower install
    npm install
    grunt

You then need to create the config files:

    cp application/config/config.example.php application/config/config.php
    cp application/config/database.example.php application/config/database.php
    cp application/modules_core/mcb_menu/config/mcb_menu.example.php application/modules_core/mcb_menu/config/mcb_menu.php

Then edit these files according to your needs.

##Upgrade
You can use Git to get the latest version:

    git pull
    git submodule update

You then need to update the dependencies:

    bower update
    npm install
    grunt

##Themes
To create a new theme, you only need to create a new folder in the *themes/* folder.
The main file of your theme will be *themes/yourtheme/css/main.css*.

You then need to edit the ```$config['theme']``` parameter in *application/config/config.php*.

##License
This software is under the [GNU General Public License v3](http://www.gnu.org/licenses/gpl.html).

##Credits
This software uses some code from [MyClientBase](https://jeroenvheel.github.io/MyClientBase/).
