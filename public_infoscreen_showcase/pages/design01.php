<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #container>p {
        font: bold;
        color: white;
        font-size: 24px;
    }

    #rectangle {
        width: 1920px;
        height: 1080px;
        background: black
    }

    #digital-clock {
        color: white;
        width: 35%;
        margin: auto;
        padding-top: 25px;
        padding-bottom: 25px;
        font-size: 64px;
        text-align: center;
    }
    .grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}

.grid-item1 {
  width: 500px;
  height: 1080px;
  background-color: rgba(255, 255, 255, 0.8);
  font-size: 30px;
  text-align: center;
}
.grid-item2 {
    width: 10px;
    height: 1080px;
    background: red;
    border-radius: 5px;
}

.grid-item3 {
    width: 700px;
    height: 1080px;
    background: red;
    
}



</style>



<body>

    <div id="rectangle">
        <div>
            <div class="grid-container">
                <div class="grid-item1"><div>in <b>2</b> min</div></div>
                <div class="grid-item2"></div>
                <div class="grid-item3">3</div>




            </div>

        </div>
    </div>
    <div id="container">
        <p>design01</p>
    </div>
</body>

</html>