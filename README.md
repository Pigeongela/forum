1.Цель работы
Разработаться информационную систему онлайн-форума.
2.Описание системы
Система состоит из трех разделов:
База данных
BackEnd (Уровень бизнес логики)
FrontEnd (Пользовательский интерфейс)
Система предоставляет следующие возможности:
регистрация и авторизация пользователя в системе;
просмотр списка зарегистрированных пользователей;
просмотр аккаунтов зарегистрированных пользователей;
создание публикации;
выход из системы.
При переходе на сайт, Клиенту необходимо зарегистрироваться. Для этого необходимо нажать ссылку «Зарегистрироваться». Перейдя на страницу с формой регистрации, нужно ввести все необходимые данные в соответствии с требованиями. После успешной регистрации Клиент может авторизоваться и воспользоваться функционалом сайта - для этого нужно заполнить форму входа и нажать кнопку «Войти». Далее Клиента встречает приветсвенное сообщение: 
«[user_name], добро пожаловать на форум!
Здесь Вы можете опубликовать новую запись, посмотреть список зарегистрированных участников,
перейти в свой аккаунт или в аккаунты участников».
Для создания публикации нужно нажать кнопку «Новая запись». Вы перейдёте на страницу с формой для публикации. Заполните её соответсвующим образом, и нажмите кнопку «Опубликовать».
Для просмотра аккаунта пользователя нажмите на кнопку «Участники» и нажмите на ссылку нужного пользователя.
Чтобы выйти из своего аккаунта, нажмите кнопку «Выйти».
3.Ход работы
Сначала была создана форма регистрации и входа, далее была разработана база данных, которая была подключена к системе. Был разработан пользовательский интерфейс. Финальным этапом была разработка урованя бизнес логики и взаимодейсти между бизнес логикой и пользовательским интерфейсом.
4.Компоненты системы
Используемый стек технологий:
Apache
PHP
MySQL
JQuery
Bootstrap
Структура базы данных:

Пароли пользователей хешируются и недоступны для просмотра Администратором:

Файл со стилями: 
/css/style.css
5.Список использованных источников
Для размещения искользовался выделенный сервер и доменное имя, предоставляемые ресурсом https://sweb.ru
Увидеть выполненную работу можно по ссылке: http://pigeongela.online.swtest.ru/
