FROM debian
RUN apt update && apt install -y lsb-release apt-transport-https ca-certificates software-properties-common

RUN apt install wget

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg 

RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'

# RUN curl -sSL https://packages.sury.org/php/README.txt |  bash -x
RUN apt update && apt install -y php8.2-fpm

RUN apt install -y php8.2-zip php8.2-xml php8.2-curl php8.2-gd php8.2-mysql php8.2-intl php8.2-mbstring
RUN mkdir -p /run/php/
RUN touch /run/php/php8.2-fpm.sock

EXPOSE 9000

CMD ["/usr/sbin/php-fpm8.2", "-F"] 