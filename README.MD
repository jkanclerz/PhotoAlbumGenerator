Installation / Usage
--------------------

1. Download the [`composer.phar`](https://getcomposer.org/composer.phar) executable or use the installer.

    ``` sh
    $ curl -sS https://getcomposer.org/installer | php
    ```

2. Install dependencied
    
    ``` sh
    $ php composer.phar install
    ```

3. Start the buildin server

    ``` sh
    $ php -S localhost:8888 -t web web/index_dev.php
    ```
