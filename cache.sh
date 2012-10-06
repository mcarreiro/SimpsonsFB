#echo "Limpiando carpeta cache"
echo "-Limpiando cache"
rm -rf ../app/cache/prod/*
rm -rf ../app/cache/dev/*
php app/console cache:clear --env=prod --no-debug	 #Limpiar cache prod
echo "-Warmup cache produccion"
php app/console cache:warmup
echo "-Limpiando cache dev"
php app/console cache:clear --env=dev	 #Limpiar cache dev
echo "-Generando assets"
php app/console assetic:dump --env=prod --no-debug
