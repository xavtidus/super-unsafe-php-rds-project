#!/bin/bash
sudo yum update -y
sudo yum install git -y
sudo amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2
sudo yum install -y httpd mariadb-server
sudo systemctl start httpd
sudo systemctl enable httpd
sudo systemctl is-enabled httpd
sudo usermod -a -G apache ec2-user
sudo chown -R ec2-user:apache /var/www
sudo chmod 2775 /var/www && find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;
echo "<?php phpinfo(); ?>" > /var/www/html/phpinfo.php
cd ~/
git clone https://github.com/xavtidus/super-unsafe-php-rds-project.git
cd super-unsafe-php-rds-project
sudo cp * /var/www/html
curl http://localhost/config.php?servername=database-1.cluster-ch0mpekudt59.ap-southeast-2.rds.amazonaws.com&username=admin&password=6b*GCDBkXcdL3xP&dbname=mydb