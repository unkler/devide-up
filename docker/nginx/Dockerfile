FROM nginx:1.20-alpine
COPY ./docker/nginx/default.prod.conf /etc/nginx/conf.d/default.conf
COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./src /var/www/html

#phpイメージのnpm run buildの成果物をnginxイメージにコピー
#COPY --from=php:prod /var/www/html/public/build /var/www/html/public/build
#phpイメージのシンボリックリンクをnginxイメージにコピー
#COPY --from=php:prod /var/www/html/public/storage /var/www/html/public/storage

ENV TZ=Asia/Tokyo
EXPOSE 80