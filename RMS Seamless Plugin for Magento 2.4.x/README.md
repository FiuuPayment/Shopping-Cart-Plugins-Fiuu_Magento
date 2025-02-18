- Magento 2 compatibility up to 2.4.5 with php 8.1 and 8.2.

Installation guide:
- Extract the content to app/code folder in Magento 2 docroot.
- Run the following command to install the module:
- php bin/magento setup:upgrade 
- php bin/magento s:d:c 
- php bin/magento s:s:d -f 
- php bin/magento cache:clean
- php bin/magento cache:flush