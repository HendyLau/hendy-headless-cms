# Local Installation
        composer update
        composer require laravel/sail --dev
        php artisan sail:install
        ./vendor/bin/sail up
        composer require laravel/breeze --dev
        php artisan breeze:install livewire
        npm install laravel-mix@^6.0.0 --save-dev
        npm install
        npm run dev
        cat /etc/resolv.conf | grep nameserver
        CREATE USER 'root'@'{{IP}}' IDENTIFIED BY '';
        GRANT ALL PRIVILEGES ON *.* TO 'root'@'172.25.240.222' WITH GRANT OPTION;
        FLUSH PRIVILEGES;
        composer require spatie/laravel-permission
        composer require stichoza/google-translate-php
        composer require laravel/sanctum
        php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
        mysql -h {{IP}} -u root
        composer require stichoza/google-translate-php
        php artisan lang:generate
        npm install --save-dev cross-env
        php artisan lang:generate
        php artisan config:clear
        php artisan route:clear
        php artisan view:clear
        php composer dump-autoload
        php artisan migrate
        php artisan storage:link
        php artisan serve
        then visit `` http://localhost:8000 or http://127.0.0.1:8000



# Public JSON API Documentation

Base URL: http://yourdomain.com/api/v1

- /api/v1/posts	
- /api/v1/posts?category=berita	
- /api/v1/posts/slug-judul-post	
- /api/v1/pages	
- /api/v1/pages/tentang-kami	
- /api/v1/categories	
- /api/v1/categories/berita	


🔹 Posts API

GET /posts

Description: Get a paginated list of all published posts.

Query Parameters:

category (optional): Filter by category slug

sort (optional): asc or desc (default: desc)

Response Example:

{
  "current_page": 1,
  "data": [
    {
      "id": 1,
      "title": "My First Post",
      "slug": "my-first-post",
      "content": "...",
      "short_description": "...",
      "image": "url",
      "status": "published",
      "published_at": "2025-07-01T00:00:00",
      "locale": "en",
      "categories": [
        { "id": 1, "name": "News", "slug": "news" }
      ]
    }
  ],
  "last_page": 1,
  "per_page": 10,
  "total": 1
}

GET /posts/{slug}

Description: Get a single published post by slug.

Response: Same as item in list above.



🔹 Pages API

GET /pages

Description: List of published pages.

Response:

[
  {
    "id": 1,
    "title": "About Us",
    "slug": "about-us",
    "body": "...",
    "status": "published",
    "published_at": "2025-07-01T00:00:00"
  }
]

GET /pages/{slug}

Description: Get a single page by slug.




🔹 Categories API

GET /categories

Description: List of all categories with post count.

Response:

[
  {
    "id": 1,
    "name": "News",
    "slug": "news",
    "posts_count": 5
  }
]

GET /categories/{slug}

Description: Get category details and list of posts under it.

Response:

{
  "category": {
    "id": 1,
    "name": "News",
    "slug": "news"
  },
  "posts": {
    "current_page": 1,
    "data": [...],
    "last_page": 1,
    "per_page": 10,
    "total": 5
  }
}



✅ Notes

All responses are public (no token needed)

JSON formatted, paginated where applicable

Ready for frontend or mobile app integration

Dates are in ISO 8601 format (Y-m-dTH:i:s)

