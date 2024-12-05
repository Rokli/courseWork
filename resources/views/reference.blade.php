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
            flex-direction: column; 
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
            transition: box-shadow 0.3s ease; 
        }
        .buttons:hover{ 
            box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.8);
        }
        .panel {
            background-color: whitesmoke;
            height: calc(100% - 65px); 
            width: calc(100% - 100px); 
            margin: 15px 50px; 
            box-sizing: border-box; 
            display: flex;
            flex-direction: column; 
        }
        .panell {
            background-color: black;
            height: calc(100% - 80px); 
            width: calc(100% - 30px); 
            margin: 15px 20px; 
            box-sizing: border-box; 
        }
        .button-in-panel{
            display: flex;
            width: 100%;
            padding: 0 20px;
            justify-content:space-around;
        }
        .buttons-in-panel{
            width: 200px;
            height: 50px;
            margin: 5px 50px; 
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            z-index: 0;
            transition: box-shadow 0.3s ease; 
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
            <button class="buttons"type="button">Разное</button>
            <button class="buttons"type="button">Фильмы</button>
            <button class="buttons"type="button">Договоры</button>
            <button class="buttons"type="button">Документы</button>
            <button class="buttons"type="button">Справочники</button>
            <button class="buttons"type="button">Окно</button>
            <button class="buttons"type="button">Справка</button>
            </div>
            
        </div>
        <div class="content">
                <div class = "panel">
                    <div class="button-in-panel">
                        <button class="buttons-in-panel"type="button">Разное</button>
                        <button class="buttons-in-panel"type="button">Фильмы</button>
                        <button class="buttons-in-panel"type="button">Договоры</button>
                        <button class="buttons-in-panel"type="button">Документы</but>
                        <button class="buttons-in-panel"type="button">Справочники</but>
                        <button class="buttons-in-panel"type="button">Окно</button>
                        <button class="buttons-in-panel"type="button">Справка</button>
                    </div>
                    <div class="panell">

                    </div>
                </div>
        </div>
    </div>
</body>
</html>
