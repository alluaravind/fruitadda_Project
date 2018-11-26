                        /*         FRUIT ADDA Project    */
		
			 : : : : : XAMPP INSTALLATION : : : : : 

-> First install the XAMPP using the link
		https://www.apachefriends.org/index.html

-> And set the location of xampp folder on the desktop.

-> Click Yes when prompted. This will open the XAMPP setup window.
-> You may have to click OK on a warning if you have User Account Control (UAC) activated on your computer.
-> Click Next. It's at the bottom of the setup window.
-> By default, all attributes are included in your XAMPP installation.
-> Click Next. You'll find it at the bottom of the page.
-> Uncheck the "Learn more about Bitnami" box, then click Next. The "Learn more about Bitnami" box is in the middle of     the page.
-> Click Finish when prompted.
-> Click Save. Doing so opens the main Control Panel page.
-> Start XAMPP from its installation point.
-> Install the MySQL, Apache in XAMPP control panel.


                       	  : : : : :EDITOR: : : : : 
-> Download Sublime from the link given below and install it.
			https://www.sublimetext.com/

                         : : : : : DATABASE CREATION : : : : : 
-> Type the URL localhost/phpMyadmin in the Browser.

	Database login name: 	root
	//     There is no password for these database xampp server.
-> Create the new database name "fruitadda" in the XAMPP server.
-> Import fruitadda.sql file from the downloaded folder named fruitadda.(All tables will automatically created in that     database named fruitadda.sql)


      		                   : : : : EXECUTION PROCESS: : : : : 
			/*   Retailer Registration Process */
-> Open the downloaded folder and run the file retailerregistration.php in the browser by typing
						localhost/fruitadda/retailerregistration.php
-> Register the Retailer by providing valid credentials and save the password and Email Id.
-> Then login into the retailer login by typing valid credentials.
    Note: You can use login credentials by the Email and password like
			Email Id: alluaravind1313@gmail.com
		                Password: aravind@123
 These credentails are provided for example purpose to login into the website.
-> Now retailer have to update the Storename,StoreDescription,Store Location compulsorily by giving valid PAN card     number which was given in the registration pocess.
-> Now retailer can add fruits in his store in order to sell.
-> He can add many number of fruits in his store along with valid price and quantity per each fruit.
-> Retailer cannot add same type of fruit into his store until the fruit quantity become unavailable.
-> Retailer can update only one fruit's quantity and price in a day.
-> If one fruit's quantity is decreased from his store, then automatically the quantity of that fruit will automatically     decreased and the money will automatically added into the sellers wallet from the shopper.

			/*   Shopper Registration Process */
-> Open the downloaded folder and run the file retailerregistration.php in the browser by typing
						localhost/fruitadda/retailerregistration.php
-> Register the Shopper by providing valid credentials and save the password and Email Id.
-> Then login into the shopper login by typing valid credentials.
    Note: You can use login credentials by the Email and password like
			Email Id: pa1kumarmaddula@gmail.com
		                Password: pavan@123
     These credentails are provided for example purpose to login into the website.
-> Now shopper can view the list of retailers in his dashboard page. ( buyerdashboard.php)
-> Now shopper can choose the retailer of his own choice from the list of retailers.
-> After choosing the retailer, he can choose the best combination of fruits from the list of that corresponding retailer .
-> Then he can buy that combination and then money ($100) will get automatically deducted from his wallet.
-> Then the delivery boy will courier the fruits to that particular shopper.
-> Retailer can update only one fruit's quantity and price in a day.
-> If one fruit's quantity is decreased from his store, then automatically the quantity of that fruit will automatically     decreased and the money will automatically added into the sellers wallet.

    
      		
      		                   : : : : :FOLDERS : : : : 
 -> retailerregistration.php
     This consists of registrations modals of retailer and shopper and also it consists of login modals too.
 -> jsontojquery.php
      This consists of retailers fruits and their quantity and price. He can also update the fruit's quantity and price and also he can add the fruits.
 -> buyerdashboard.php 
      This consists of list of retailers and the shopper can choose the particular retailer and he can buy the best combination      of fruits from particular retailer.




