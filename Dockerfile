# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: swquinc <swquinc@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/11/04 23:16:42 by swquinc           #+#    #+#              #
#    Updated: 2020/11/05 22:09:46 by swquinc          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# main docker's commands
# create image
# docker build -t ft_server .

# create container and run
# docker run -it -p 80:80 -p 443:443 ft_server

# clear system from docker utils
# docker system prune

FROM debian:buster

WORKDIR /srcs

RUN apt-get -y update && \
	apt-get -y upgrade && \
	apt-get -y install nginx && \
	apt-get -y install vim && \
	apt-get -y install wget && \
	apt-get -y install mariadb-server && \
	apt-get -y install php-fpm php-common php-mbstring php-xmlrpc php-soap php-gd && \
	apt-get -y install php-xml php-intl php-mysql php-cli php-ldap php-zip php-curl && \
	wget https://ru.wordpress.org/latest-ru_RU.tar.gz && \
	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz && \
	tar xf latest-ru_RU.tar.gz && \
	tar xf phpMyAdmin-4.9.5-all-languages.tar.gz && \
	rm latest-ru_RU.tar.gz && \
	rm phpMyAdmin-4.9.5-all-languages.tar.gz

COPY srcs/ .
EXPOSE 443 80
CMD bash run_server.sh
