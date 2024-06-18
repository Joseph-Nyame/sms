so after the interview, I read around a number of design of system design patterns. So i used the strategy design pattern to aid in adding multiple sms providers so as to not change the code much if the need be that extra sms providers be added. some of the design patterns I read around are service repository pattern and strategy design pattern. 


The Strategy Design Pattern is a behavioral design pattern that enables you to swap out algorithms or behaviors in an object at runtime. It achieves this by defining a family of algorithms, encapsulating each one as an object, and making them interchangeable. This pattern promotes code flexibility, maintainability, and reusability, as you can easily add, remove, or switch algorithms. 

Implementation
 I have created a command that can be executed in the terminal. This command takes a name of an sms service provider and return the method that you would want to use in broadcasting the sms
php artisan app:sms-strategy {smsMethod}