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

#wrapper h1 {
    background: -webkit-repeating-linear-gradient(-45deg,
    rgb(18, 83, 93),
    rgb(18, 83, 93) 20px,
    rgb(64, 111, 118) 20px,
    rgb(64, 111, 118) 40px,
    rgb(18, 83, 93) 40px);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
}

#wrapper h1:after{
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