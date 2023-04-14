# MVC-PHP 🐘

> Author : DOURNEL Frédéric

## Aim of this project 📍

This project was made during my second years of Bachelor University of Tehnology. The goal was to discovered the MVC structure with le PHP language. With that, we make an SQL table and we showing data with a html table. In this HTML page, I make lot of tools for navigate on the project.

## Technologies use ⚙️

For this project, I use PHP with Postgresql database.

<div align="center">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg"  width="90"/>
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" width="90"/>
</div>

## How to use ❓

- First of all, create postgresql database with the commands on the *bdd.sql* file.
- Then change the *$path* variable on the *path.php* file and also add your postgresql id on the *models/config-db.php*.
- After for use this project you have to use the index.html page in your http request with on parameter ("controller") the controller you want to see.

```
http://localhost/php/semestre4/mvc-php/index.php?controller=[nameOfController]
```