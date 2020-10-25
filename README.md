# Group Assignment 2B 


#### Team 24_04 (Agile)


| MEMBER | EMAIL |
| --- | --- |
| Zhidong Zhou | zhidong.zhou@student.unimelb.edu.au |
| Jinglu Huang Jeremy | jinglu.huang@student.unimelb.edu.au |
| Mingyao Xiao  |  mingyaox1@student.unimelb.edu.au |
| Ruiying Wang | ruiywang@student.unimelb.edu.au |



#### KEY Requirement 

1. Customer Registration: requires necessary customer information which includes:  
    1. Name of Client  
    2. Home Address  
    3. Contact phone number  
    4. Email address (Mandatory as login credential)  
    5. Initial password  
    6. Extra information (special consideration factors)

2. Customer Login: must be able to login to the system using valid login credentials and password, which need to be the same with the information entered during registration.

3. The customer requires to be able to add and modify their biller and other personal information (Same as listed in Registration).

4. Customers can make 
appointments. And follows the required 
process.  
    1. Customers can select from a list of available types of services.  
    2. Customers can select from available time slots (The valid booking time is limited to 9 am to 5 pm, and 7 days a week).  
    3. Customer home address needs to be recorded by the system for each appointment.  
    4. Customers can add extra messages such as special requirements, expectations and considerations for the upcoming services session they paid for.
    5. Each new appointment will trigger an email notification which will include customer name, phone number, email address and the date-time of the appointment. 
    6. Customers can view and cancel appointments after appointments are made. And cancellation email needs to be sent and with the customer name, phone number email address and date-time for the appointment.
6. The system must send notification and confirmation email when a new appointment is made by the 
customer. And the Email should include:  
    1. Name and Phone Number  
    2. The email address of the customer.  
    3. Date and time of the appointment.
7. The system can store and manipulate all the user and transaction-related records into a 
database.  
    1. The system can check and manage the booking conflicts, and mark time slots that have been booked (as some users may book appointments at the same time).
8. Administrators(Admin), as the ‘Super User’ inherit all the basic characteristics form the users and can have more privileges, which includes:  
    1. Admin must be able to add and edit beauty services and its 
details.  
    2. Admin must be able to collect fees based on each hour of consultation 
sessions.  
    3. Admin must be able to view and manage the database.



#### Plug-in

[salon-booking-system-v3.443]( https://github.com/salonbooking/salonbooking)