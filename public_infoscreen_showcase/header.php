<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>
</head>
<style>
    body {
        background-color: burlywood;
    }

    .flex-container-out {
        display: flex;
        height: 200px;
        background-color: red;
        border-radius: 8px;
        align-items: center;

    }


    .flex-container-inner {
        display: flex;
        align-items: center;
        height: 120px;
        background-color: white;
        flex-grow: 1
    }

    #imgRight {
       border-left: 10px;
    }

    #showcase {
        text-align: center;
        font-size: 30px;
        flex-grow: 8;
    }

    #bis {
        font-size: 40px;
        font-style: oblique;
    }

    #btn
    {
        border-radius: 50px;
        font-size: 30px;
        margin: 10px;
        padding: 14px;
    }

    #btn:hover {
        text-decoration: underline;
    }
</style>


<body>

    <div class="flex-container-out">
        <div class="flex-container-inner">
            <div>
                <a href="index.php?page=home">
                <button  id="btn"> Startseite</button>
                </a>
            </div>
            <div>
                <a href="index.php?page=contacts">
                <button  id="btn"> Kontakt</button>
                </a>
            </div>
            <div id="showcase">
                <h3>Showcase</h3>
            </div>
            <div>
                <img id="imgRight" src="img/small-passenger-express-train.png" alt="Train on bridge.">
            </div>
        </div>
    </div>
    <p id="bis">Bahn Informations Systeme</p>


</body>

</html>