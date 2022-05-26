
# BingHR Laravel Admin CRUD Dashboard [![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://ng.linkedin.com/in/oyetade-tobi)

Using Laravel PHP framework, I have developed an API and frontend for user administration using HTML, Jquery, AJAX, CSS, PHP and Jquery DataTables.

#### Added Features
The following are added features in the application:
#####
● Datatable Buttons
##### This can be used to **``Export to PDF,CSV and EXCEL``**, and can also be used to **``COPY``** table data and as well **``Print``** table records
#### ● Dark Mode
##### For easy readability, I implemented a dark/light mode swithc on the top left corner of the dashboard

#### ● Permissions Module.
##### The permissions is dynamically created which is binded to each data record and is stored in the database and can be updated individually

#### ● Employee ID Generator.
##### For data integrity and employee ID uniqueness sake, I created and ID generator that helps associate a unique random 8-digit ID to each employee


## Setup Guide
To setup the application in your environment, follow the steps below:
```javascript
1. clone repo run git clone https://github.com/introvertdev/binghr_crud_admin.git
2. run composer install
3. run copy .env.example .env
4. configure your database settings in your .env file
5. run php artisan key:generate
6. run php artisan migrate
7. if your are running the application on a local machine ensure your local server (i.e WAMPP, XAMPP etc) is running and phpMydAdmin and Apache is running
8. Public URL => http://localhost/{application_url}/public/home/
9. Application URL in my case => binghr_crud_admin
```


## API Reference

#### Adminstrator signup

```http
  GET {Public URL}/api/employees
```
**Function ->**  `Get the list of all employees from the database`

#### Create employee record

```http
  POST {Public URL}/api/employees
```
 **Function -> :**  `This creates employee data in the database`
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
`employee_id` | `string` | **Required**. Employee ID (Autogenerated)|
| `first_name` | `string` | **Required**. Employee's first name|
| `last_name` | `string` | **Required**. Employee's last name|
| `email` | `string` | **Required**. Employee's email|
| `phone` | `int` | **Required**. Employee's phone number|
| `role` | `string` | **Required**. Employee's role|
| `username` | `string` | **Required**. Employee's username|
| `paswword` | `string` | **Required**. Employee's password|
| `c_password` | `string` | **Required**. Confirm Employee's password|
| `permission` | `comma delimited string` | Read - r, Write - w, Delete - d|


#### View single employee

```http
  GET {Public URL}/api/employees/{id}
```

 **Function -> :**  `Get single employee record by ID`

#### Update single employee
```http
  PUT {Public URL}/api/employees/{id}
```
 **Function -> :**  `This updates the selected employee data in the database`
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `first_name` | `string` |  Employee's first name|
| `last_name` | `string` |  Employee's last name|
| `email` | `string` |  Employee's email|
| `phone` | `int` | Employee's phone number|
| `role` | `string` |  Employee's role|
| `username` | `string` | Employee's username|
| `paswword` | `string` |  Employee's password|
| `c_password` | `string` | Confirm Employee's password|
| `permission` | `comma delimited string` | Read - r, Write - w, Delete - d|


#### Delete employee data

```http
  DELETE /api/employees/{id}
```

 **Function -> :**  `Deletes employee record from the database`


