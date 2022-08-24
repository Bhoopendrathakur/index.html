<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
    font-size: 19px;
}
table{
    width:50%;
    border: 3px solid;
    border-color: skyblue;
    border-collapse: collapse;
    text-align: left;
}
thead{
    background-color: rgb(143, 201, 201);
}
tr{
    border-bottom: 1px solid black;
}
th,td{ border: 3px solid;
    border-color:black;
    /* border:none; */
    height:30px;
    /* padding: 2px; */

}
tr:hover {
    background: #f5f5f5;
}
.main{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 100px 700px;
    /* background-color: grey; */
    width:1640px;

 }
 .dev{
    display: grid;
    grid-column-start: 1;
    grid-column-end: 3;
    grid-row-start: 1;
    grid-row-end: 2;
    color:rgb(143, 201, 201);
    /* height:200px; */
    padding-left: 100px;
    background-color: black;
 }
 .outputbox{
    display: grid;
    grid-column-start: 2;
    grid-column-end: 3;
    grid-row-start: 2;
    grid-row-end: 3;
    justify-items: center;
    align-content: center;
 }
 .inputbox{
    display: grid;
    grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 2;
    grid-row-end: 3;
    justify-content: center;
    align-content: center;
    line-height: 62px;

 }
 hr{
    display: block;
    height: 50px;
    background-color:black;
    grid-column-start: 1;
    grid-column-end: 3;
    
    width:100%;
    
}
input{
    border: 3px solid;
    border-color: rgb(143, 201, 201);
    height:44px;
    width: 240px;
    font-size:18px;
}

#submitbtn{
    height: 50px;
    width: 163px;
    background-color: rgb(143, 201, 201);
    position: relative;
    left: 167px;
    top:33px;
}

    </style>
</head>
<body>
    
</body>
</html>