C:\Windows\System32\drivers\etc\hosts
127.0.0.1       dev.kasir


xampp\apache\conf\extra\httpd-vhosts

<VirtualHost *:80>
    ServerAdmin dev.kasir
    DocumentRoot "E:/xampp/htdocs/kasir/public"
    ServerName dev.kasir
    <Directory "E:/xampp/htdocs/kasir/public">
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" 
</VirtualHost>

restart apache