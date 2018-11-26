1) Write SQL to get the number of retailers available in the system.
		SELECT COUNT(retailer_email) FROM retailerregistration;

2) Write SQL to get the shoppers counts for each retailer (who purchased).
	SELECT count(shopper_email), retailer_email from fruit_table_purchase group by retailer_email;

3) Write SQL to get all the shoppers count.
	SELECT count(shopper_email) as Shoppercount from fruit_table_purchase;

4) Write SQL to get purchase amount per day wrt to a retailer.
	SELECT sum(retwallet) FROM `fruit_table_purchase` WHERE date='2018-11-26'

5) Write SQL to find top retailer based on the number of purchases
    

6) Write SQL to find a loyal shopper of any retailer based on the number of purchased more than threshold 5
	