<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exemplo bubble sort</title>
</head>
<body>
    <script>
        document.addEventListener("DOMContentLoaded",()=>{
            render(generateArray(100));
        })
        function createArray(){
            var col = document.getElementById("qtdcol").value;
            render(generateArray(col));
        }
        function bubbleSort(array){
            var aux;
            var swap;
            do{
                swap = false;
                for(let i = 0; i <= array.length; i++){
                    let next = (i + 1);
                        if(array[i] > array[next]){
                            aux = array[next];
                            array[next] = array[i];
                            array[i]    = next;
                            swap = true;
                            setTimeout(() => {
                                render(array)
                            }, 2000);
                        }
                    
                }
            }while(swap)
            return array;
        }
        function sortOneByOne(array){
            var aux;
            var swap;
            var newArray = [];
            var interval = setInterval(() => {
            swap = false;    
            for(let i = 0; i < array.length; i++){
                    let next = (i + 1);
                    let pos1 = document.getElementById(i);
                    let pos2 = document.getElementById(next);
                    if(pos2 != undefined){
                        if(parseInt(pos1.getAttribute("data-value")) > parseInt(pos2.getAttribute("data-value"))){
                            aux = pos2.getAttribute("data-value");
                            pos2.setAttribute("data-value",pos1.getAttribute("data-value"));
                            pos1.setAttribute("data-value",aux);
                            pos2.style.height = pos2.getAttribute("data-value") + "%";
                            pos1.style.height = pos1.getAttribute("data-value") + "%";
                            swap = true;
                            }   
                }
            }
            for(let i = 0; i < array.length; i++){
                newArray[i] = document.getElementById(i).getAttribute("data-value");
            }
                console.log('ok');
                document.getElementById("sort").innerHTML = newArray.join(",");
                if(!swap){
                    clearInterval(interval);
                }
            }, 200);
            //render(array);
       
            
        }
        function generateArray(qtd){
            let i = 0;
            var arr = [];
            do{
                arr[i] = Math.round(Math.random() * 100);
                i++;
            }while(i < qtd)
            document.getElementById("mess").innerHTML = arr.join(",");
            return arr;
        }
        function show(){
            var row = document.getElementById("sortido");
            row.innerHTML = '';
            var array = generateArray();
            var sortedArray = bubbleSort(array);
            render(array,'baguncado','mess');
        }
        function stepByStep(){
            var arr = document.getElementsByClassName("col");
                    sortOneByOne(arr);
        }
        function render(array,id = "sortido",id2 = "sort"){
            var row = document.getElementById(id);
                row.innerHTML = '';
            for(let i = 0; i < array.length; i++){
            row.innerHTML += `<td class="vertical" style="max-width:1px">
                <div style="background-color: blue; height:${array[i] * 1}%; width:100%; align:bottom" id="${i}" class="col" data-value="${array[i]}"></div>
            </td>`
            }
            //document.getElementById(id2).innerHTML = array.join(",");
        }
    </script>
    <div class="container my-5 text-center">

        <div class="row">
            <div class="col-sm-3 text-right"><br>
        Qtd. de Colunas
        </div>
        <div class="col-sm-2"><br>
        <input type="text" class="form-control" value="100" id="qtdcol">
        </div>
        <div class="col-sm-2"><br>
        <button class="btn btn-primary btn-block" onclick="createArray()">Criar array</button>
    </div>
    </div>
            <div class="row">
                <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <br>
        <button onclick="stepByStep()" class="btn btn-info btn-block">Ordenar array</button>
        
        </div>
        <div class="col-sm-4"></div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <h6>Array misturado </h6>
    <div id="mess" class="col-sm-12 text-center" style="word-wrap: break-word;">
    </div>
    <hr>
    <h6>Array arrumado</h6>
    <div id="sort" class="col-sm-12 text-center"  style="word-wrap: break-word;">
    </div>
    </div>
    </div>
    </div>
    <style>
        .vertical{
            height: 100%;
            max-width: 2%;
            background-color: white;
            vertical-align: bottom;
        }
    </style>
    <div class="container mb-5 pb-5" style="overflow-x:scroll">
    <h1>Array </h1>
    <div class="row">
    <table  style="height:500px; width:100%; align:bottom;  border-collapse: separate;">
    <tr id="sortido">
    </tr>
    </table>
    </div>
    </div>
  
</body>
</html>
