#TODO: Username and password. For now, the hardcoded scotchbox values work
cd /var/www/public/application/dbsetup
echo "Creating database users"
mysql --user=root --password=root < dbUserCreate.sql
echo "Creating database"
mysql --user=rapidrpg --password=rapidrpg < dbCreate.sql
echo "Adding sample data"
mysql --user=rapidrpg --password=rapidrpg --database=rapidrpgtest < loadSampleData.sql