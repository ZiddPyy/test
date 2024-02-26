# How to install

1. clone repository
```
git clone https://github.com/Y4zidd/ukk_telkom.git
```

2. open your project
```
cd path/ukk telkom
```

3. rename .env.example to .env
```
cp .env.example .env
```

4. open folder, with IDE

5. setting .env, and configuration your database, username, etc

6. open terminal, run
```
$ composer install
$ php artisan key:generate
$ php artisan migrate
```

7. and run
```
php artisan serve
```
