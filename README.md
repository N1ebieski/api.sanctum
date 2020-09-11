# api.sanctum.local

Backend implementation of authentication by Laravel Sanctum in [Vue Nuxt.JS application](https://github.com/N1ebieski/sanctum.local). 

## Important things

.ENV config (my config in .env.example):

1. SESSION_DOMAIN must supports domain of frontend app
2. SANCTUM_STATEFUL_DOMAINS must contains domains (local and production) with (if any) ports, without protocols of frontend app (in Postman a Referer field can be created for this purpose in the Header)
3. CORS_ALLOWED_ORIGINS must contains allowed domains (local and production) with (if any) ports AND protocols of frontend app

CORS config file (my config in config/cors.php)

1. 'supports_credentials' must be true (for authentication cookie of course)
2. 'path' must contains allowed urls paths