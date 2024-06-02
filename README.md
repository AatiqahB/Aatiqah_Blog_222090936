TERM 2 BLOG ASSIGNMENT
Aatiqah Benjamin 222090936
Webframeworks ICE360S
Lecturer: Joseph Chigbogwu Akwunwa 

Technologies and Frameworks Used:
For this project, I created a blog using the Laravel framework. To help me create this project, I used the Chirpers layout for the comment section on my blog and referred to the LinkedIn course “Laravel 9.0 Essential Training” by Shruti Balasa. Additionally, I followed the YouTube series “How to Build a Blog with Laravel” by DevMarketer to help me create my blog posts.

For styling, I made use of Tailwind CSS. For elements that I could not style with Tailwind, I added inline CSS and created a CSS file in my public folder to link long CSS codes to my project. I also utilized Laravel’s Blade and Breeze.

Setup and Installation Instructions:
For this project, I used Xampp, MySQL, GitBash, Laravel, and Visual Studio Code.

How to Use the Blog Platform:
•	User Registration: From the landing page, users have two options: login and register. Users can register their accounts and then verify them through a link. A challenge I encountered was getting the verification link to send to users’ emails. For demonstration purposes, I used Mailtrap to show that verification works. Another way to access the verification link is by going into the storage/logs/Laravel.log  folder and scrolling to the bottom to find the verification link. The same process is used for password recovery. Once verified, users can log in.
•	Posting: Once logged in, users can navigate to "Posts" via the "Start posting now" button on the dashboard or through the top navigation element called “Posts.”
•	Commenting: On the Posts page, users can scroll to the blog posts and click on the titles. At the bottom of a post, there is a comment button that takes users to the comments section, where they can comment, edit, or delete their thoughts.
•	Administrative Functions: In MyPHPAdministration, admins can delete and edit users or posts.

Challenges:

•	Project Folder: I had to restart my blog numerous times as it would crash, requiring me to start from scratch. This usually happened when I followed some YouTube videos without having the proper setup and installations, causing my GitBash commands to fail and crash my website. I resolved this by importing the working files from my previous attempts into a new file and working from there.
•	Verification: Users were not receiving the verification link via email, so I set up an account on Mailtrap for email verification to work for demonstration purposes. Another way to access the verification link is by going into the storage/logs/Laravel.log folder and scrolling to the bottom to find the verification link. The same process is used for password recovery. Once verified, users can log in.

Repository link:
https://github.com/AatiqahB/Aatiqah_Blog_222090936/tree/master


<!--Laravel Default README.md-->
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
