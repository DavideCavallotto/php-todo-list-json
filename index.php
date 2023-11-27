<?php

$title = 'To Do List';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>      
    <link rel="stylesheet" href="./css/style.css">     

</head>

<body>
    <div id="app">
        <div class="container">
            <h1 class="title"><?php echo $title ?></h1>            
            <input type="text" v-model="new_argument_user" placeholder="Aggiungi argomento">
            <input @click='addTodo' type="submit" value="Aggiungi">
        </div>
        <div class="container list">
            <h3 class="title">I miei argomenti</h3>
            <ul>
                <li v-for="(argument, i) in todoArguments" :key="i">{{ argument.text }}</li>
            </ul>
            

        </div>

    </div>
    
    <script src="./js/script.js"></script>
</body>
</html>