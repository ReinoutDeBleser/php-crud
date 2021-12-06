Team-repo for CRUD Challenge BeCode
Initial Challenge can be found here :
[Php-Crud](https://github.com/becodeorg/ANT-Lamarr-5.34/tree/main/2.The-Hill/php/7.crud)

Team Members: Barbara Cristina Nunes, Sushanta Pyakurel, Reinout De Bleser

Team Member Github profiles: 
- [Barbara](https://github.com/BarbaraCristinaNunes)
- [Sushanta](https://github.com/mesushanta)
- [Reinout](https://github.com/RedMarkD/)

# Title: PHP - Create, Read, Update, Delete

- Repository: `php-crud`
- Type of Challenge: `Learning Challenge`
- Duration: `3 days`
- Deployment strategy : `NA`
- Team challenge : `team of 3`

## Learning objectives
- To be able to connect to a database
- To be able to write a simple Create, Read, Update & Delete (CRUD) application
- Use a provided MVC structure to work into.

## The Mission
Our team will create a CRUD system to store student, teacher and class information in the database.
No login necessary, everyone with access can do anything in the files

Our team will use the MVC structure provided in the [PHP MVC Boilerplate](https://github.com/becodeorg/php-mvc-boilerplate) repo provided by our coach, to GIT CRACKIN'!

In this assigment we will end up with at least 3 models and 3 controllers, but you could end up with more. Model the software how you want it!

## Team Strategy
Strategy is to create seperate MVC's for each class. Learn from each other this way by giving freedom to give it our best shot initially and working together to learn from each others experience. 
The main challenge is to not have time-consuming merge conflicts and work together effectively with a team we've not previously worked with a lot. 


## Log/self-reflection
Day 1: before lunch. 
Judging by Sushanta's experience the challenge seems very manageable and our goal is to reach all the must-haves by tomorrow around lunch and nice-to-haves by the end of the 3 days.  



## Task division 
Day 1: 
divide the crud in 3, Class, Student, Teacher. 






## Must-have features
We have to provide the following pages for Students, Teacher & Class.

- A general overview of all records of that entity in a table
    * Each row should have a button to edit or delete the entity
    * This page should have a "create new" button
- A detailed overview of the selected entity
    * This should include a button to delete this entity
    * Edge case: A teacher cannot be removed if he is still assigned to a class
    * Edge case: If you remove a class, make sure to remove the link between the students and the class.
- A page to edit an existing entity
- A page to create a new entity

### Fields:
On the general overview table you can yourself decide what would be useful information to show.

On the detailed overview you have to provide the following information:

#### Student
- Name
- Email
- Class (with clickable link)
- Assigned teacher (clickable link - relation via class)

#### Teacher
- Name
- Email
- List of all students currently assigned to him (clickable link)
 
#### Class 
- Name class (Giertz, Lamarr, ...)
- Location (Antwerp, Gent, Genk, Brussels, Liege)
- Assigned teacher (clickable link)
- List of assigned students (clickable link)

## Nice to have features
- Add a search bar at the top of each page to search for the names of teachers or students
- Make an address entity. An address can be assigned to a student or teacher (where he lives) or to a class (where are the lessons given).
- Add [Basic HTTP Authentication](https://www.lifewire.com/password-protect-single-file-with-htaccess-3467922) with a `.htaccess` file.
