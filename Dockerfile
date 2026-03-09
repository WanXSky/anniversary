FROM webdevops/php-nginx:8.4-alpine
WORKDIR /app
COPY . /app
RUN composer install --no-dev --optimize-autoloader
ENV WEB_DOCUMENT_ROOT=/app/public
ENV APP_ENV=production
RUN chown -R application:application /app/storage /app/bootstrap/cache
EXPOSE 80
