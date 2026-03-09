FROM webdevops/nginx-php:8.4-alpine
WORKDIR /app
COPY . /app
ENV WEB_DOCUMENT_ROOT=/app/public
ENV APP_ENV=production
RUN chown -R application:application /app/storage /app/bootstrap/cache
EXPOSE 80
