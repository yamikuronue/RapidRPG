#TODO: Username and password. For now, the hardcoded scotchbox values work
cd /var/www/public/application/dbsetup
mysql --user=root --password=root < dbUserCreate.sql
mysql --user=rapidrpg --password=rapidrpg < dbCreate.sql