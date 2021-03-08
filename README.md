# campeonato_sinuca
Para rodar corretamente será necessário configurar o httpd-vhosts.conf do apache adicionando as seguintes linhas:

    <VirtualHost *:80>
        ServerAdmin webmaster@duarte.com.br
        DocumentRoot "C:/campeonato_sinuca"
        ServerName www.sinuca.com.br
        ErrorLog "logs/dummy-host2.example.com-error.log"
        CustomLog "logs/dummy-host2.example.com-access.log" common
        <Directory "C:/campeonato_sinuca">
            Require all granted

            RewriteEngine On

            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^ index.php [QSA,L]
        </Directory>
    </VirtualHost>

e em C:/windows/system32/drivers/etc/host adicionar: 127.0.0.1  www.sinuca.com.br

