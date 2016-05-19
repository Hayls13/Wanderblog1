#login{
    position: absolute;
    top: 0px;
    width: 88%;
    padding: 18px 6% 60px 6%;
    margin: 0 0 35px 0;
    background: rgb(247, 247, 247);
    border: 1px solid rgba(147, 184, 189, 0.8);
    box-shadow: 0pt 2px 5px rgba(105, 108, 109, 0.7),
                0pt 0px 8px rgba(208, 223, 226, 0.4) inset;
    border-radius: 5px;
}
#login{
    z-index: 22;
}

#container h1 {
    background: -webkit-repeating-linear-gradient(-45deg,
    rgb(18, 83, 93),
    rgb(18, 83, 93) 20px,
    rgb(64, 111, 118) 20px,
    rgb(64, 111, 118) 40px,
    rgb(18, 83, 93) 40px);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
}

#container h1:after{
    content: ' ';
    display: block;
    width: 100%;
    height: 2px;
    margin-top: 10px;
    background:
        linear-gradient(left,
        rgba(147, 184,189,0) 0%,
        rgba(147,184,189,0.8) 20%,
        rgba(147,184,189,1) 53%,
        rgba(147,184,189,0.8) 79%,
        rgba(147,184,189,0) 100%);
}

::-webkit-input-placeholder {
    color: rgb(190,188,188);
    font-style: italic;
}

input:-moz-placeholder,
textarea:-moz-placeholder{
    color:rgb(190,188,188);
    font-style: italic;
}
input{
    outline: none;
}

#container input:not([type="checkbox"]){
    width: 92%;
    margin-top: 4px;
    padding: 10px 5px 10px 32px;
    border: 1px solid rgb(178,178,178);
    box-sizing: content-box;
    border-radius: 3px;
    box-shadow: 0px 1px 4px 0px rgba(168,168,168,0.6)inset;
    transition: all 0.2s linear;
}

#container input:not([type="checkbox"]):active,
#container input:not([type="checkbox"]):focus{
    border: 1px solid rgba(91,90,90,0.7);
    background: rgba(238,236,240,0.2);
    box-shadow: 0px 1px 4px 0px rgba(168,168,168,0.9) inset;
}



