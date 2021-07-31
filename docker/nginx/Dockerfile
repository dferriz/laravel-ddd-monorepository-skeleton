FROM nginx:1.15-alpine

WORKDIR /var/www

RUN apk --update upgrade

COPY ./docker/etc/nginx/ /etc/nginx/

CMD ["nginx", "-g", "daemon off;"]
