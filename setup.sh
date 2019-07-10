# Creacion de archivos de configuracion

echo "Copia archivo index.php"
cp ../symbiota-interfaz/index.php ../index.php
echo "Copia archivo header.php"
cp ../symbiota-interfaz/header.php ../header.php
echo "Ccopia archivo help.php"
cp ../symbiota-interfaz/help.php ../help.php
echo "Copia archivo sitemap.php"
cp ../symbiota-interfaz/sitemap.php ../sitemap.php
echo "Creating Left Menu include: /leftmenu.php"
cp ../leftmenu_template.php ../leftmenu.php
echo "Creating footer include: /footer.php"
cp ../footer_template.php ../footer.php
echo "Creating central CSS: /css/main.css"
cp ../css/main_template.css ../css/main.css
echo "Creating CSS for Taxon Profile page: /css/speciesprofile.css"
cp ../css/speciesprofile_template.css ../css/speciesprofile.css
echo "Creating default JQuery CSS: /css/jquery-ui.css"
cp ../css/jquery-ui_template.css ../css/jquery-ui.css
echo "Creating default Data Usage Policy page: /misc/usagepolicy_template.php"
cp ../misc/usagepolicy_template.php ../misc/usagepolicy.php

#Adjust file permission to give write access to certain folders and files
echo "Adjusting file permissions"
chmod 777 ../webservices/dwc/rss.xml
chmod -R 777 ../temp
chmod -R 777 ../content/collicon
chmod -R 777 ../content/css
chmod -R 777 ../content/dwca
chmod -R 777 ../content/geolocate
chmod -R 777 ../content/imglib
chmod -R 777 ../content/lang
chmod -R 777 ../content/logs
