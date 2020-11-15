mysqldump -uroot -pfuck1912 laravel > database/database.sql --ignore-table=users
git pull
git add .
git commit -m "DB"
git push
