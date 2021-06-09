# ft_server
This is network administration project on Docker. In this project we needed built Nginx web-server. This server run multiple services: Wordpress, phpmyadmin, SQL DataBase. Also we learned TLS/SSL cryptographic protocols, and learned how to use openssl.

### Run
1) docker build -t ft_server .   
2) docker run -it -p 80:80 -p 443:443 ft_server
3) Open browser and go to https://localhost
