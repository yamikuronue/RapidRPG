#USAGE
# First parameter is username
# Second parameter is password

DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
cd DIR
echo "Creating database users"
mysql --user=$1 --password=$2 < dbUserCreate.sql
echo "Creating database"
mysql --user=rapidrpg --password=rapidrpg < dbCreate.sql
echo "Adding sample data"
mysql --user=rapidrpg --password=rapidrpg --database=rapidrpgtest < loadSampleData.sql