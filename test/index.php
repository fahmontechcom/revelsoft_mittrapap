<div id="box" class="box" style="width: 300px; height: 300px;">
    <div class="shadowboard"> 
    </div>
    <div class="clipboard" style="-webkit-clip-path: polygon(31% 12%, 51% 12%, 11% 53%, 11% 31%);
clip-path: polygon(31% 12%, 51% 12%, 11% 53%, 11% 31%);">

    </div>
    <div class="clipboard" style="-webkit-clip-path: polygon(74% 4%, 75% 50%, 23% 99%, 23% 49%);
clip-path: polygon(74% 4%, 75% 50%, 23% 99%, 23% 49%);">

    </div>
    <div class="clipboard" style="-webkit-clip-path: polygon(88% 43%, 89% 63%, 60% 91%, 37% 91%);
clip-path: polygon(88% 43%, 89% 63%, 60% 91%, 37% 91%);">

    </div>
    
</div>

<style>
    body{
        background-color:blue;
    }
    .box {
    position: relative;
    
    -ms-touch-action: none;
    touch-action: none;
    
}
    .shadowboard {
    pointer-events: none;
    opacity: 0;
    -webkit-transition: opacity .375s;
    transition: opacity .375s;
    
}

.clipboard{
    -webkit-box-shadow: 17px -14px 85px -19px rgba(0,0,0,0.75);
-moz-box-shadow: 17px -14px 85px -19px rgba(0,0,0,0.75);
box-shadow: 17px -14px 85px -19px rgba(0,0,0,0.75);
}
    .clipboard, .shadowboard {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    background-color: transparent;
    background-image: url(../template/images/Md.-Manwar-Hossain.jpg);
    background-size: cover;
    background-position: center center;
}
.handles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
.handle:nth-of-type(1), .point:nth-of-type(1), figure:nth-of-type(1) {
    color: tomato;
}
.handle {
    border-radius: 50%;
    box-shadow: inset 0 0 0 10px;
    opacity: .8;
    -webkit-transition: opacity .25s;
    transition: opacity .25s;
    cursor: -webkit-grab;
    cursor: -moz-grab;
    cursor: grab;
}
.delete-point, .handle {
    position: absolute;
    width: 20px;
    height: 20px;
}
.handle:after {
    display: block;
    content: "";
    position: absolute;
    top: -8px;
    left: -8px;
    right: -8px;
    bottom: -8px;
}

    
    
    .background{
        width: 640px;
        height: 512px;
        background-image: url("../template/images/Md.-Manwar-Hossain.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .child1{
        -webkit-clip-path: polygon(34% 10%, 72% 11%, 38% 33%, 2% 31%);
        clip-path: polygon(34% 10%, 72% 11%, 38% 33%, 2% 31%);
        background-color:red;
    }
</style>