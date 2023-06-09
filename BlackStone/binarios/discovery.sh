# Definir la URL de la página web
$1 2>/dev/null

# Buscar direcciones IP
echo "Direcciones IP:"
dig +short $1

# Buscar subdominios
echo "Subdominios:"
host -t ns $1 | awk '{print $NF}' | sed 's/\.$//'

echo "hecho" > /clientes/$.txt
