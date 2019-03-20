@ECHO OFF
set SRVPATH=C:\Users\1\Desktop\WorkServers\nginx\nginx-1.14.2
start /D%SRVPATH% nginx.exe

C:/Users/1/Desktop/WorkServers/php-7.1/php-cgi.exe -b 127.0.0.1:9000 -c C:/Users/1/Desktop/WorkServers/php-7.1/php.ini
