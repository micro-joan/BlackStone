exec 2>/dev/null

#COLORES
green='\033[1;32m'
red='\e[;31m'
endcolor='\033[0m'
install_library='\033[1;31m'

PWD=`pwd`

#LIBRERIAS
xampp_blackstone=`ls /opt/BlackStone/xampp_installer/xampp-installer.run`
xampp_installed=`ls /opt/lampp/xampp`
blackstone_installed=`ls /opt/lampp/htdocs/BlackStone`
bbdd_installed=`ls $PWD/xampp_installer/db_installed.txt`
python3_installed=`which python3`
created_icon=`ls /usr/share/applications/blackstone.desktop`

chmod 777 /opt/blackstone/xampp_installer/icon/blackstone.png
chmod 777 /opt/blackstone/xampp_installer/icon/blackstone.desktop

echo ""
echo "▄▄▄▄· ▄▄▌   ▄▄▄·  ▄▄· ▄ •▄ .▄▄ · ▄▄▄▄▄       ▐ ▄ ▄▄▄ . "
echo "▐█ ▀█▪██•  ▐█ ▀█ ▐█ ▌▪█▌▄▌▪▐█ ▀. •██  ▪     •█▌▐█▀▄.▀· "
echo "▐█▀▀█▄██▪  ▄█▀▀█ ██ ▄▄▐▀▀▄·▄▀▀▀█▄ ▐█.▪ ▄█▀▄ ▐█▐▐▌▐▀▀▪▄ "
echo "██▄▪▐█▐█▌▐▌▐█ ▪▐▌▐███▌▐█.█▌▐█▄▪▐█ ▐█▌·▐█▌.▐▌██▐█▌▐█▄▄▌ "
echo "·▀▀▀▀ .▀▀▀  ▀  ▀ ·▀▀▀ ·▀  ▀ ▀▀▀▀  ▀▀▀  ▀█▄▀▪▀▀ █▪ ▀▀▀  "
echo ""
echo "Created by Joan Moya (Aka. MicroJoan)"
sleep 3

echo " "
echo " "
echo "Checking components for BLACKSTONE"
echo "==================================="
echo ""

sleep 0.5

#Check as ROOT
if ! [ $(id -u) = 0 ]; 
    then 
        echo ""
        echo " ${red} EXECUTE AS ROOT!! ${endcolor}" 
        exit  
fi

#Check xampp installer binarie
if [ -z $xampp_blackstone ] #si xampp_installed es vacío..
    then
        echo "XAMP INSTALLER ${red} KO ${endcolor}"
        echo ""
        sleep 1
        echo "Downloading Xampp installer on BlackStone..."
        echo ""
        wget https://github.com/micro-joan/BlackStone/releases/download/installer/xampp-installer.run -P /opt/BlackStone/xampp_installer &
        pid_descarga=$!

        while kill -0 $pid_descarga 2>/dev/null; do
            sleep 1
        done # Continuar con la siguiente acción después de que la descarga haya finalizado

    else
        echo "XAMPP INSTALLER ${green} OK ${endcolor}"
fi

sleep 1

#Check xampp
if [ -z $xampp_installed ] #si xampp_installed es vacío..
    then
        echo "XAMP ${red} KO ${endcolor}"
        echo ""
        sleep 1
        echo "Installing Xampp..."
        echo ""
        chmod 777 /opt/BlackStone/xampp_installer/xampp-installer.run
        chmod +x /opt/BlackStone/xampp_installer/xampp-installer.run & ./xampp_installer/xampp-installer.run
        clear
    else
        echo "XAMPP ${green} OK ${endcolor}"
fi

sudo /opt/lampp/lampp start

sleep 1

#Check blackstone
if [ -z $blackstone_installed ] #si blackstone_installed es vacío..
    then
        echo ""
        echo "${red} Installing BlackStone core${endcolor}"
        echo ""
        sleep 1
        chmod /opt/lampp/htdocs
        cp -r BlackStone/ /opt/lampp/htdocs #copiamos todos los archivos al nuevo directorio
        chmod -R 777 /opt/lampp/htdocs/BlackStone/
        sleep 1
    else
        echo "BlackStone core ${green} OK ${endcolor}"
fi

sleep 1

echo "Installing DB on BlackStone..."
sleep 1

# Configuración de la base de datos
DB_USER="root"
DB_PASS=""
DB_NAME="blackstone"

# Ruta del archivo SQL a importar
PWD=`pwd`
SQL_FILE="blackstone.sql"
ROUTE_FILE="$PWD/xampp_installer/$SQL_FILE"

# Comando para importar el archivo SQL en la base de datos
/opt/lampp/bin/mysql -u${USER} -e "CREATE DATABASE $DB_NAME;" 
/opt/lampp/bin/mysql -u${USER} $DB_NAME < $ROUTE_FILE

echo ""
echo "¡Database is installed now!"
sleep 2
clear

/opt/lampp/xampp restart > /dev/null

#Check DB installed
if [ -z $bbdd_installed ] #si bbdd_installed es vacío..
    then
        echo "Database ${red} not installed ${endcolor}"
        echo ""
        sleep 1
        echo "Installing DB on BlackStone..."
        sleep 1

        # Configuración de la base de datos
        DB_USER="root"
        DB_PASS=""
        DB_NAME="blackstone"

        # Ruta del archivo SQL a importar
        PWD=`pwd`
        SQL_FILE="blackstone.sql"
        ROUTE_FILE="$PWD/xampp_installer/$SQL_FILE"

        # Comando para importar el archivo SQL en la base de datos
        /opt/lampp/bin/mysql -u${USER} -e "DROP DATABASE $DB_NAME;"
        /opt/lampp/bin/mysql -u${USER} -e "CREATE DATABASE $DB_NAME;" 
        /opt/lampp/bin/mysql -u${USER} $DB_NAME < $ROUTE_FILE

        sleep 2
        # echo "database installed" > xampp_installer/db_installed.txt #creamos archivo para verificar que se ha instalado la db
        echo ""
        clear
        echo ""
        echo "¡Database is installed now!"
        sleep 2
        clear
    else
        echo "BlackStone DB ${green} OK ${endcolor}"
fi

sleep 1

#creamos alias en sistema
cp /opt/BlackStone/xampp_installer/icon/blackstone /usr/local/bin/blackstone
chmod +x /usr/local/bin/blackstone

#copiamos el icono en sistema
cp /opt/BlackStone/xampp_installer/icon/blackstone.desktop /usr/share/applications/blackstone.desktop
chmod +x /usr/share/applications/blackstone.desktop

#configuramos arranque desde alias/icono
chmod +x /opt/BlackStone/xampp_installer/icon/simple_launch.sh

echo " "
echo "Launching BlackStone..."
echo ""
sleep2

xdg-open "http://localhost/BlackStone/"

exit



