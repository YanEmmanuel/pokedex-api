dev:
	npm run dev

up:
	./vendor/bin/sail up -d

down:
	./vendor/bin/sail down

stop:
	./vendor/bin/sail stop

restart:
	./vendor/bin/sail restart

migrate:
	./vendor/bin/sail php artisan migrate

fresh:
	./vendor/bin/sail php artisan migrate:fresh
