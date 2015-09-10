#!/bin/bash

COLOR="\033[;35m"
COLOR_RST="\033[0m"

add-apt-repository -y ppa:pi-rho/dev

echo -e "${COLOR}---updating system---${COLOR_RST}"
apt-get update

echo -e "${COLOR}---installing some tools---${COLOR_RST}"
apt-get install -y software-properties-common
apt-get install -y python-software-properties
apt-get install -y zip unzip
apt-get install -y curl
apt-get install -y build-essential
apt-get install -y vim
apt-get install -y git
apt-get install -y tmux
apt-get install -y python g++ make

echo -e "${COLOR}---installing node---${COLOR_RST}"
curl --silent --location https://deb.nodesource.com/setup_0.12 | bash -
apt-get install -y nodejs
npm install -g gulp

echo -e "${COLOR}---installing Apache---${COLOR_RST}"
apt-get install -y apache2
rm -rf /var/www/html
ln -fs /vagrant /var/www/html

echo -e "${COLOR}---installing MySql---${COLOR_RST}"
debconf-set-selections <<< "mysql-server mysql-server/root_password password 1234"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password 1234"
apt-get install -y mysql-server mysql-client

echo -e "${COLOR}---installing php 5.3---${COLOR_RST}"
apt-get install -y php5 libapache2-mod-php5 php5-mcrypt php5-curl php5-mysqlnd php5-xdebug php5-gd

echo -e "${COLOR}---configureing database---${COLOR_RST}"
mysqladmin -u root -p1234 create vagrant

echo -e "${COLOR}---run apace as vagrant to avoid issues with permissions---${COLOR_RST}"
sudo sed -i 's_www-data_vagrant_' /etc/apache2/envvars

echo -e "${COLOR}---enabling rewrite module---${COLOR_RST}"
if [ ! -f /etc/apache2/mods-enabled/rewrite.load ] ; then
    a2enmod rewrite
fi

echo -e "${COLOR}---enabling deflate module---${COLOR_RST}"
if [ ! -f /etc/apache2/mods-enabled/deflate.load ] ; then
    a2enmod deflate
fi

echo -e "${COLOR}---restart apache2---${COLOR_RST}"
service apache2 restart
