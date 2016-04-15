# jobskillsapp

## Synopsis
This is a small project done as a part of a internship application for Queztal Online Solutions Ltd.
The project is a simple app using PHP in the backend and jQuery (with HTML & CSS) in the front.

## Using the app
To use, visit: https://calm-badlands-49010.herokuapp.com/
Input any job position that you are searching for, and the table below displays the best matching skills required for that post through analysis of a JSON file.

## Design & Algorithm
The text input by the user is taken and split into words which are then matched with the job skills in the JSON database. The weightage of a matched role is calculated based on the number of matching words. Then the skills for a matched role are stored in a map which keeps track of the number of times a skill reoccurs in matching roles. The skills are then arranged in reverse order with the most matched skill being displayed first in the table.

## Tests, Bugs & Improvements
This project can be developed in many ways to make the job-skill prediction more accurate.
For example, imlementing the edit-dstance dynamic programming algorithm created heavy slowdown in generating results despite numerous attempts, but can be pursued with knowledge of how major search engines implement their search match algorithms.
Suggestions are always invited at: bsahoonap@gmail.com

## Sample Skill Reccomendation Cases

![alt tag](http://i.imgur.com/6jmJ7KB.png)
![alt tag](http://i.imgur.com/caoHWAt.png)
![alt tag](http://i.imgur.com/dRqDX9v.png)
![alt tag](http://i.imgur.com/EzQnhR2.png)
