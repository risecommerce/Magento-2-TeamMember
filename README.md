##Team Member Extension

This extension is perfect marketing tool for your bussiness that provides Team Member Gallery to your existing customers.

##Support: 
version - 2.3.x, 2.4.x

##How to install Extension


Method II)

1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/TeamMember
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/TeamMember'

Method II)

Using Composer

composer require risecommerce/team-member-extension:1.0.1

#Enable Extension:
- php bin/magento module:enable Risecommerce_TeamMember
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

#Disable Extension:
- php bin/magento module:disable Risecommerce_TeamMember
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
