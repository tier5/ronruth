sudo apt-get -y update
sudo apt-get -y upgrade
sudo apt-get -y install zip
sudo apt-get -y install git
sudo apt-get -y install apache2
sudo apt-get -y install  php libapache2-mod-php php-mcrypt php-mbstring
sudo apt-get -y install php-dom php-curl php-cli
sudo phpenmod mcrypt
sudo a2enmod rewrite
sudo service apache2 restart
