cd /var/www/html/Sensorproject 
sudo touch temp.html
sudo cp sensordata.html temp.html
sudo cp index.html sensordata.html
sleep 2m
sudo cp sensordata.html index.html
sudo cp temp.html sensordata.html
sudo rm temp.html
