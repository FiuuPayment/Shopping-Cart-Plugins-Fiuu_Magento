- Magento 2 compatibility tested on 2.4.5 (PHP 8.1, 8.2) and 2.4.9 (PHP 8.3).

Installation guide:
- Extract the content to app/code folder in Magento 2 docroot.
- Run the following command to install the module:
- php bin/magento setup:upgrade 
- php bin/magento s:d:c 
- php bin/magento s:s:d -f 
- php bin/magento cache:clean
- php bin/magento cache:flush