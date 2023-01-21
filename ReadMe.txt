Welcome once again to Negat!
*Database
create a b_ticket database
open db_server and import b_ticket.sql to b_ticket database in xampp
*Dependencies
1.SMTP
open dependancies/SMTP/Rnwood.Smtp4dev.exe for starting the mail server
then type localhost:5000 on the searchbar in any browser
2.QR
go to xampp folder and search php_gd.dll - mostly 9.21Mb
copy it and go to c:/windows/system32 and paste it 
next open xampp admin control panel and select config option under apache and open
php.ini file 
find and replace ;extension=gd with extension=gd
save close and reopen xampp

you are all set:)
