<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио студента</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    
    <header>
        <h1>Портфолио студента</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#about">О себе</a></li>
            <li><a href="#projects">Проекты</a></li>
            <li><a href="#contact">Контакты</a></li>
            <li><a href="#exit">Выход</a></li>
        </ul>
    </nav>
    
    <main>
        <section id="about">
            <h2>О себе</h2>
            <input type="text" placeholder="Напишите что-нибудь о себе" required>
            <button type="submit">Сохранить</button>
        </section>
     
        <section id="projects">
            <h2>Мои проекты</h2>
            <article>
                <h3 id="pr">Проект: <input type="text" placeholder="Название проекта">  <button type="submit">Сохранить</button></h3>
                <br>
                <h3 id="d">Описание: <input type="text" placeholder="Описание проекта">  <button type="submit">Сохранить</button></h3>
                <br>
                <h3>Файл: <input type="file">  <button type="submit">Добавить</button></h3>
            </article>
        </section>
       
        <section id="contact">
            <h2>Связаться со мной</h2>
            <form action="#" method="post">

                <label>Имя:</label>
                <input type="text" required>

                <label>Email:</label>
                <input type="email" required>

                <label>Сообщение:</label>
                <textarea name="message" rows="4" required></textarea>

                <button type="submit">Отправить</button>
            </form>
        </section>
    </main>
    
    <footer>
        <p> © 2026 Портфолио студента. Все права защищены.</p>
    </footer>

</body>
</html>