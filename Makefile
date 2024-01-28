up:
	docker compose up --build

down:
	docker compose down --remove-orphans

mysql-dump:
	docker exec -it web-app-php-db-1 bash -c "mysqldump -pdbroot testdb > /var/local/dbdump.sql"

mysql-from-dump:
	docker exec -it web-app-php-db-1 bash -c "mysql -pdbroot testdb < /var/local/dbdump.sql"