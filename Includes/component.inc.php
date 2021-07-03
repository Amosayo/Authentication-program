<?php

function components($type, $labelName, $placeHolder, $name){
    $inputElement="
    <div class=\"input-group mb-3\">
  <span class=\"input-group-text bg-warning\" id=\"inputGroup-sizing-default\">$labelName</span>
  <input type='$type' name='$name' placeholder='$placeHolder' class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>
    ";

    echo $inputElement;
}

function btnComponents($type, $class, $name, $text){
    $btnElement="
    <div class=\"form-group\">
     <button type='$type' class='$class' name='$name'> $text </button>
        </div>
    ";
    echo $btnElement;
}