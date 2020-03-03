#!/usr/bin/expect

# get mysql paquage
wget https://repo.mysql.com/apt/ubuntu/pool/mysql-apt-config/m/mysql-apt-config/mysql-apt-config_0.8.14-1_all.deb

# depaquage
expect -c "
    set timeout 10
    spawn dpkg -i mysql-apt-config_0.8.14-1_all.deb

    expect \"Which MySQL product do you wish to configure? \"
    send \"1\r\"

    expect \"Which server version do you wish to receive? \"
    send \"1\r\"

    expect \"Which MySQL product do you wish to configure? \"
    send \"4\r\"
    expect EOF
 "

export DEBIAN_FRONTEND="noninteractive"

apt-get update && apt-get upgrad
apt-get install -y mysql-server