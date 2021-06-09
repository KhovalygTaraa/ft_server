# ft_server
This is network administration project on Docker. In this project we needed built Nginx web-server. This server run multiple services: Wordpress, phpmyadmin, SQL DataBase. Also we learned TLS/SSL cryptographic protocols, and learned how to use openssl.

### Run
docker build -t ft_server .
docker run -it -p 80:80 -p 443:443 ft_server
