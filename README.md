# PHP-function-for-determine-age
For working with people data, there are two ways to store age, that is as an integer or as a date of birth. The latter is generally preferred because it does not require anyone to manually update that information.

Therefore, this repository contains a PHP class with properties where is defined the `get_age()` function. Then, is converted the person's date of birth in the format **YYYY-MM-DD** to an age in years. 

PHP has a very helpful build-in function the **DateTime class** that help us convert a date of virtually any format into something we can use for conversions. So, in this case with function `get_age()` it's converted  a date of birth  to a new DateTime class and inside it is sent the date of birth that is a property of the object. Then, with function **Date** it's get today's date. 

Finally, with function `diff` is substracted date of birth from today's date. With the PHP year property, only the age number of the specified person from the Person class is returned.

---

To check how it looks, click on the preview and then on the green run button.
##
[PREVIEW](https://replit.com/@MirnesGlamocic/PHP-function-for-determine-age#index.php)