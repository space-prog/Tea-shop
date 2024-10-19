<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="output.php" method="post">
        <input type="range" value="50" min="50" max="1000" step="50" name="water" id="" oninput="this.nextElementSibling.value = this.value">
        <output>50</output><br>
        <input type="range" name="sugar" value="1" min="1" step="1" max="6" id="" oninput="this.nextElementSibling.value = this.value">
        <output>1</output><br>
        <input type="range" name="honey" min="0" max="5" step="1"  id="" oninput="this.nextElementSibling.value = this.value">
        <output>0</output><br>
        <div class="flexcenter">
            <label class="flexcenter">
                <input type="radio" name="tea" id="fructs" value="4" required>
                <span class="dots dot9"></span>
                Фруктовий чай
            </label>
            <label class="flexcenter">
                <input type="radio" name="tea" id="black" value="2" required>
                <span class="dots dot10"></span>
                Чорний чай
            </label>
            <label class="flexcenter">
                <input type="radio" name="tea" id="green" value="3" required>
                <span class="dots dot11"></span>
                Зелений чай
            </label>
            <label class="flexcenter">
                <input type="radio" name="tea" id="travany" value="6" required>
                <span class="dots dot12"></span>
                Трав'яний чай
            </label>
        </div><br>
        <div class="flexcenter">
            <label class="flexcenter">
                <input type="checkbox" name="dodatky" id="lemon" value="4">
                <span class="dot dots"></span>
                Лимон
            </label>
            <label class="flexcenter">
                <input type="checkbox" name="dodatky" id="imbyr" value="3">
                <span class="dot2 dots"></span>
                Імбир
            </label>
            <label class="flexcenter">
                <input type="checkbox" name="dodatky" id="milk" value="6">
                <span class="dot3 dots"></span>
                Молоко
            </label>
            <label class="flexcenter">
                <input type="checkbox" name="dodatky" id="koritsa" value="2">
                <span class="dot4 dots"></span>
                Кориця
            </label>
            <label class="flexcenter">
                <input type="checkbox" name="dodatky" id="vanil" value="1">
                <span class="dot5 dots"></span>
                Ваниль
            </label>
        </div><br> 
        <div class="flexcenter">
            <label class="flexcenter">
                <input type="checkbox" name="tort" id="tort" value="70">
                <span class="dots dot6"></span>
                Тортик
            </label>
            <label class="flexcenter">
                <input type="checkbox" name="sweet" id="sweets" value="38">
                <span class="dots dot7"></span>
                Цукерки
            </label>
            <label class="flexcenter">
                <input type="checkbox" name="croisant" id="croisant" value="40">
                <span class="dots dot8"></span>
                Круасан
            </label>
        </div><br>
        <div class="flexcenter">
            <label class="flexcenter">
                <input type="radio" name="time" id="time1" value="35" required>
                <span class="dots dot13"></span>
                Легкий
            </label>
            <label class="flexcenter">
                <input type="radio" name="time" id="time2" value="43" required>
                <span class="dots dot14"></span>
                Середній
            </label>
            <label class="flexcenter">
                <input type="radio" name="time" id="time3" value="54" required>
                <span class="dots dot15"></span>
                Міцний
            </label>
        </div><br>
        <button type="submit">Налляти</button>
    </form>
</body>
</html>