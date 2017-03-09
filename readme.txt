##Things to note before Trying to use it

- Make sure Vagrant is installed locally and works.. In case you get an error and it tells you to change enable hardware virtualization technology (VT-x) , then just enable it from BIOS.  
- Clone Repo --> https://github.com/tier5/ronruth.git
- Then Do --> vagrant up
- Then Do --> vagrant ssh
- Then Do --> cd /var/www/html/scripts
- Then Do --> sudo ./script.sh ( Make sure local mysql password should be toor )
- Then Do --> nano /var/www/html/ronruth/wp-config.php
- Then Do --> change $table_prefix = wp_
- Then Local Environment Can be Seen at --> http://localhost:8535 
- Incase it doesnot work for you or shows some errors then just run these two commands from your local project directory given below
- check the permission and do =>  
1.cd /var/www/html
2.chmod -R 777 ronruth