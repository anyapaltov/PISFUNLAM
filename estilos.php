* body {
    margin: auto;
    position: static;
    justify-content: center;
}

{
    margin: 100;
    padding: 100;
    box-sizing: border-box;
    font-family: sans-serif; 
    position: absolute;
}

header{
    height: 100px;
    background: #CE852A;
    color: #fff;
    display: flex;
    justify-content:center;
    align-items: center;
}

#btn-menu{
    display: none;
}
header label {
    font-size: 30px;
    cursor: pointer;
    display: none;   
}

.menu ul {
    background: #CE852A;
    display: flex;
    list-style: none;
}

.menu ul ul {
    display: none;
}

.menu a {
    display: block;
    padding: 15px 20px;
    color: #fff;
    text-decoration: none;
}

.menu a:hover {
    background: rgba(0,0,0,0.3);
}

.menu a span {
    margin-left: 10px;
}

.menu ul li:hover ul{
    display: block;
    position: absolute;
    
}


@media (max-width:768px){
    header label {
        display: block;
    }
    
    .menu {
        position: absolute;
        top:50px;
        left: 0%;
        width: 100%;
        transform: translateX(-100);
        transition: all 0.3s;
    
    }
    
    .menu ul{
        display: block;
        background: #555;
    }
    .menu ul li:hover ul{
        display: none;
    }
    .menu a span {
        position: absolute;
        right: 5px;
    }
    
    #btn-menu:checked ~ .menu {
        transform: translateX(0%);
        
    }
 
    .menu ul ul {
        background: rgba(0,0,0,0.4);
    }
    
    .menu ul ul a {
        padding: 15px 40px;
    }

}