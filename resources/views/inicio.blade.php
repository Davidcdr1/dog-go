<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
<div>
    <img src="{{ asset('images/dog&go.png') }}" alt="Logo" class="center">
   
        <button class="big-button" onclick="window.location.href='login'">Login</button>
        <button class="big-button" onclick="window.location.href='register'">Register</button>
    </div>
</body>
</html>
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }
    :root {
        --backgroundColor: rgba(246, 241, 209);
        --colorShadeA: #282422;
        --colorShadeB: #F1CDAC;
        --colorShadeC: #F1CDAC;
        --colorShadeD: #F1CDAC;
        --colorShadeE: #F1CDAC;
    }
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");
    * {
        box-sizing: border-box;
    }
    *::before,
    *::after {
        box-sizing: border-box;
    }
    body {
        font-family: 'OpenSans', sans-serif;
        font-size: 1rem;
        line-height: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        min-height: 100vh;
        background: var(--backgroundColor);
    }
    button {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        font-size: 1.5rem;
        color: var(--colorShadeA);
        font-weight: 700;
        text-transform: uppercase;
        font-family: inherit;
    }
    button.big-button {
        padding: 1em 2em;
        border: 2px solid var(--colorShadeA);
        border-radius: 1em;
        background: var(--colorShadeE);
        transform-style: preserve-3d;
        transition: all 175ms cubic-bezier(0, 0, 1, 1);
    }
    button.big-button::before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--colorShadeC);
        border-radius: inherit;
        box-shadow: 0 0 0 2px var(--colorShadeB), 0 0.75em 0 0 var(--colorShadeA);
        transform: translate3d(0, 0.75em, -1em);
        transition: all 175ms cubic-bezier(0, 0, 1, 1);
    }

    button.big-button:hover {
        background: var(--colorShadeD);
        transform: translate(0, 0.375em);
    }
    button.big-button:hover::before {
        transform: translate3d(0, 0.75em, -1em);
    }
    button.big-button:active {
        transform: translate(0em, 0.75em);
    }
    button.big-button:active::before {
        transform: translate3d(0, 0, -1em);
        box-shadow: 0 0 0 2px var(--colorShadeB), 0 0.25em 0 0 var(--colorShadeB);
    }
</style>