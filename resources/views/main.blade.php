<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Демонстрация кинофильмов</title>
    <style>
        body {
            margin: 0;
            height: 100vh; 
            display: flex;
            flex-direction: column; /* Устанавливаем вертикальное направление */
        }
        .header {
            background-color: white; 
            height: 100px; 
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }
        .content {
            background-color: black; 
            height: calc(100vh - 100px); 
            flex: 1; 
            color: white; 
            display: flex;
            flex-direction: column; 
        }
        .button-header{
            background-color: black; 
            height: 100px; 
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }
        .button-content{
            background-color: black; 
            height: calc(100vh - 100px); 
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }
        .button-in-header{
            display: flex;
            width: 100%;
            padding: 0 20px;
            justify-content:space-around;
        }
        .buttons{
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }
        .buttons:hover{
            background-color:white;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/close.png') }}" width="100" height="111">
    </div>
    <div class="content">
        <div class="button-header">
            <div class="button-in-header">
            <button class="buttons"type="button">Я кнопка (верх)</button>
            <button class="buttons"type="button">Я кнопка (верх)</button>
            <button class="buttons"type="button">Я кнопка (верх)</button>
            <button class="buttons"type="button">Я кнопка (верх)</button>
            <button class="buttons"type="button">Я кнопка (верх)</button>
            <button class="buttons"type="button">Я кнопка (верх)</button>
            <button class="buttons"type="button">Я кнопка (верх)</button>
            </div>
            
        </div>
        <div class="button-content">
            <button type="button">Я кнопка (низ)</button>
        </div>
    </div>
</body>
</html>