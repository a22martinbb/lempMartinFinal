FROM debian
RUN apt update && apt install -y lsb-release apt-transport-https ca-certificates software-properties-common

RUN apt install wget

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg 

RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'

# RUN curl -sSL https://packages.sury.org/php/README.txt |  bash -x
RUN apt update && apt install -y php7.4-fpm

RUN apt install -y php7.4-zip php7.4-xml php7.4-curl php7.4-gd php7.4-mysql php7.4-intl php7.4-mbstring
RUN mkdir -p /run/php/
RUN touch /run/php/php7.4-fpm.sock

EXPOSE 9001

CMD ["/usr/sbin/php-fpm7.4", "-F"] 