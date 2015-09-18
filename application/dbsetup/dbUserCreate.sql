GRANT USAGE ON *.* TO 'rapidrpg'@'localhost'; /*Prevents errors*/
drop user 'rapidrpg'@'localhost';
flush privileges;


create user 'rapidrpg'@'localhost' identified by 'rapidrpg';
grant all privileges on rapidrpgtest.* to rapidrpg;
flush privileges;