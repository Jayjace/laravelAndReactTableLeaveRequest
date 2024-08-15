git clone https://github.com/Jayjace/laravelAndReactTableLeaveRequest.git
cd .\laravelAndReactTableLeaveRequest\
composer install 
cp .env.example .env 
go to .env file and put in your server username and password
php artisan key:generate 
php artisan migrate
php artisan db:seed
php artisan serve
on another terminal
cd .\react-datanova-requests\
npm install (if needed and must have node installed)
npm install
npm run start

I tried this on 2 other computer's and worked fine.