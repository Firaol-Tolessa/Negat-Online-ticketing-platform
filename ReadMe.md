<h3>Welcome once again to Negat!</h3>
<ul>
<li>Database</li>
create a b_ticket database
open db_server and import b_ticket.sql to b_ticket database in xampp
<li>Dependencies</li>
<ul>
<li>SMTP</li>
Open dependancies/SMTP/Rnwood.Smtp4dev.exe for starting the mail server
then type localhost:5000 on the searchbar in any browser
<li>QR</li>
Go to xampp folder and search php_gd.dll - mostly 9.21Mb
copy it and go to <i><b>c:/windows/system32</b> </i>and paste it 
next open xampp admin control panel and select config option under apache and open
<i><b>php.ini</b> </i> file 
find and replace <br>
<i><b> ;extension=gd </b> </i> with <i><b> extension=gd</b> </i>
save close and reopen xampp
</ul>
<br>
you are all set 😉
