# ILEA
ILEA = Interactive learning Experience Application.

# Design of ILEA
ILEA is an fully interactive, multi-platform learning tool used to test one’s knowledge in Autism and the impact of Autism Ontario. The design of ILEA is built on multiple platforms and sync up to a database, which is controlled by an admin (via Admin panel) who deletes and modifies the Questions/Answers 


# Current Features
Light-weight web application built via JS. 
Light-weight Android Application 
Fully functional login/ admin panel for db modifications

# Why ILEA?
Engaging users:
This tool is used to engage various of users in different age groups and captures their attention and tests their knowledge.

Gathering data:
The tool takes users responses anonymously and adds them to the database to create a report on how well versered users regarding autism in general.

# Web Application
The web application is made of pure JS, the reason the application itself uses JS because it does not use any server resources. Our goal is not to make this application hard to use and put charity web host in stress. Therefore;The server will have a cron job which will update a json file that gets information from the Database everyday, which is used by the web application to generate Q/A for the users. These information gets sent back to the database for report generation.The questions are randomly chosen from a set, therefore the sets will be different. At the end of the quiz, users are presented with list of questions that they have gotten wrong and correct facts are given.
