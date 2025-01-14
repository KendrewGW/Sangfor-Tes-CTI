<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sangfor Cyber Command</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Jersey+15&family=Neucha&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Unlock&display=swap');

html, body{
    margin: 0;
    padding: 0;
    font-family: 'Rubik';
    box-sizing: border-box;
    scroll-behavior: smooth ;
    padding-top: 70px;
    overflow-x: hidden;
}

.row{
    display: flex;
    flex-direction: row;
}

.col{
    display: flex;
    flex-direction: column;
}

a{
    text-decoration: none;
    color: white;
}

/* ===================================navbar================================= */
#navbar{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 2;
}

#navbar .localization{
    font-family: 'Rubik';
    background-color: #000A85;
    padding: 0.1rem 9rem;   
    color: white;
    align-items: center;
    justify-content: right;
}

#navbar .brand{
    gap: 10px;
    justify-content: left;
    align-items: center;
    padding: 1rem 5rem;
    background-color: rgba(255, 255, 255, 0.7);
}

#navbar .brand img{
    max-width: 100%;
    height: 40px;
}

/* ===================================content================================= */
#home .col{
    color: white;
    font-family: 'Rubik';
    padding: 13rem 30rem 13rem 12rem;
    background: linear-gradient(160deg, rgba(0, 0, 142, 0.6), rgba(4, 190, 2, 0.6));
}

#home .col h1{
    font-size: 40px;
}

#home .freeTrial{
    padding: 0.7rem 4rem;
    background-color: rgba(4, 190, 2, 1);
    color: white;
    transition: 0.2s;
}

#home .freeTrial:hover{
    background-color: rgba(1, 128, 0, 1);
}

#home .freeTrial1{
    padding: 0.7rem 1.3rem;
    background-color: rgba(1, 128, 0, 1);
    color: white;
    transition: 0.2s;
}

#aboutus{
    padding: 6.1rem;
    padding-right: 20%;
    padding-left: 20%;
}

#aboutus .row{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 48px;
}

#aboutus .row .right{
    justify-content: center;
    align-items: center;
}

#aboutus .row .right h1{
    font-size: 40px;
}

#aboutus .row .right p{
    color: rgba(108, 100, 106, 1);
    line-height: 1.5;   
}

#aboutus .row .left form{
    padding: 1.3rem;
    background-color: white;
    gap: 20px;
    color: rgba(108, 100, 106, 1);
}

#aboutus .row .left form p{
    font-weight: 700;
}

#aboutus .row .left form label{
    color: rgba(108, 100, 106, 1);
    margin-bottom: 8px;
    font-size: small;
}

#aboutus .row .left form input{
    outline: none;
    border: 1px solid rgba(186, 186, 186, 0.8);
    padding: 8px 20px 8px 8px;
    border-radius: 5px;
}

#aboutus .row .left form input::placeholder{
    color: rgba(186, 186, 186, 1)
}

#aboutus .row .left form .name{
    gap: 12px;
}

#aboutus .row .left form .name{
    gap: 15px;
}

#aboutus #industry{
    display: block;
    font-size: 14px;
    border: 1px solid rgba(186, 186, 186, 0.8);
    color: rgba(108, 100, 106, 0.5);
    margin-bottom: 8px;
    padding: 8px 20px 8px 8px;
    border-radius: 5px;
}

#aboutus #industry option {
    padding: 8px;
    font-size: 16px;
    background-color: #fff;
    color: rgba(108, 100, 106, 0.5);
    border-radius: 5px;
}

#industry:focus {
    color: black;
}

#aboutus .row .left form .checkbox{
    width: 36px;
    height: 36px;
    border-radius: 10px;
}

#aboutus .row .left form .button{
    display: flex;
    justify-content: center;
    align-items: center;
}

#aboutus .row .left form .send{
    padding: 0.8rem 5rem;
    background-color: rgba(4, 190, 2, 1);
    color: white;
    outline: none;
    font-size: 16px;
    border: none;
    display: inline-block;
    font-weight: 700;
    transition: 0.3s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

#aboutus .row .left form .send:hover{
    background-color: rgb(5, 146, 3);
}

#advantage .col{
    padding: 3rem;
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 16px;
}

#advantage .col h1{
    font-size: 40px;
}

#advantage h2{
    margin: 0;
}

#advantage .advantage{
    gap: 12px;
}

#advantage .advantage .col{
    padding: 3rem;
    background-color: white;
    max-width: 400px;
}

#feature .col{
    padding: 3rem;
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 16px;
}

#feature .col h1{
    font-size: 40px;
}

#feature h2{
    margin: 0;
}

#feature .feature{
    gap: 12px;
}

#feature .feature .col{
    padding: 3rem;
    max-width: 400px;
}

#value .col{
    position: relative;
    align-items: center;
    justify-content: center;
    padding: 4rem;
    padding-bottom: 8rem;
}

#value .col h1{
    font-size: 40px;
    max-width: 40%;
    text-align: center;
}

#value .start{
    align-items: flex-start;
    justify-content: start;
    gap: 30px;
    display: flex;
    flex-direction: column;
    max-width: 50%;
}

#value .row{
    gap: 12px;
}

#value .row img{
    max-width: 100%;
    height: 30px;
}

#value .row p{
    margin: 0;
    margin-top: 4px;
    font-size: 20px;
    color: rgba(108, 100, 106, 1);
    font-weight: 500;
}


.referencetitle{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 50%;
    bottom: 80px;
    z-index: 1;
}

.referencetitle .reference{
    background-color: rgba(41, 54, 96, 1);
    padding: 2rem;
    font-size: 40px;
    color: white;
}

#reference .col{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5rem;
    color: white;
    gap: 16px;
    z-index: -1;
}

#reference .col .row{
    gap: 100px;
}

#reference .col .brand img{
    max-width: 100%;
    height: 60px;
}

#reference .bottom .title{
    justify-content: center;
    align-items: center;
    text-align: center;
}

#reference .bottom .title p{
    font-size: 24px;
}

#reference .col .explore{
    font-size: 40px;
}

#reference .col .content{
    gap: 48px;
    justify-content: center;
    align-items: center;
}

#reference .col .content .col{
    padding: 2rem;
    box-shadow: 0 0 15px rgba(43, 43, 43, 0.3);
    width: 300px;
    height: 200px;
    justify-content: center;
    align-items: center;
    text-align: center;
}

#reference .col .content img{
    max-width: 100%;
    height: 100px;
}

#reference .col .content h3{
    font-weight: 600;
}

/* ===================================thank you================================= */
#thankyou .col{
    padding: 5rem;
    justify-content: center;
    align-items: center;
    gap: 12px;
}

#thankyou h1{
    font-size: 40px;
    margin: 0;
}

#thankyou p{
    font-weight: 600;
    font-size: 18px;
}

#thankyou a{
    padding: 0.8rem 5rem;
    background-color: rgba(4, 190, 2, 1);
    color: white;
    outline: none;
    font-size: 16px;
    border: none;
    display: inline-block;
    font-weight: 500;
    transition: 0.3s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* ===================================footer================================= */
#footer .upper{
    display: flex;
    flex-direction: row;
    padding: 1.2rem 5.5rem;
    background: linear-gradient(160deg, rgba(0, 0, 142, 1), rgba(4, 190, 2, 1));
    justify-content: space-between;
}

#footer .upper .content{
    font-family: 'Rubik';
    align-items: start;
    justify-content: center;    
    gap: 2.3rem;
    color: white;
}

#footer p{
    margin: 3px;
}

#footer .upper .image{
    align-items: center;
    justify-content: center;
}

#footer .bottom{
    align-items: center;
    justify-content: center;
    background-color: #000A85;
    color: white;
    padding: 1.5rem 1rem;
    font-family: 'Rubik';
    font-weight: 400;
    font-size: 14px;
}

#footer .footerImg{
    max-width: 100%;
    height: 400px;
}

@media (max-width: 768px){
    p{
        font-size: 12px;
    }

    #navbar{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 2;
    }
    
    #navbar .localization{
        font-family: 'Rubik';
        background-color: #000A85;
        padding: 0.1rem 5rem;   
        color: white;
        align-items: center;
        justify-content: right;
    }
    
    #navbar .brand{
        gap: 10px;
        justify-content: left;
        align-items: center;
        padding: 1rem 2rem;
        background-color: rgba(255, 255, 255, 0.7);
    }
    
    #navbar .brand img{
        max-width: 100%;
        height: 30px;
    }

    #home .col{
        color: white;
        font-family: 'Rubik';
        padding: 12rem 2rem;
        background: linear-gradient(160deg, rgba(0, 0, 142, 0.6), rgba(4, 190, 2, 0.6));
    }
    
    #home .col h1{
        font-size: 24px;
        text-align: center;
    }

    #home .col p{
        font-size: 12px;
        line-height: 1.15;
    }

    #home .col .row{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    #home .freeTrial{
        margin-top: 5px;
        padding: 0.6rem;
        background-color: rgba(4, 190, 2, 1);
        color: white;
        transition: 0.2s;
        font-size: 12px;
    }
    
    #home .freeTrial:hover{
        background-color: rgba(1, 128, 0, 1);
    }
    
    #home .freeTrial1{
        margin-top: 5px;
        padding: 0.6rem;
        background-color: rgba(1, 128, 0, 1);
        color: white;
        transition: 0.2s;
        font-size: 12px;
    }
    
    #aboutus{
        padding: 1rem;
        padding-right: 10%;
        padding-left: 10%;
    }
    
    #aboutus .row{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
        flex-direction: column;
    }
    
    #aboutus .row .right{
        justify-content: center;
        align-items: center;
    }
    
    #aboutus .row .right h1{
        font-size: 24px;
        text-align: center;
    }
    
    #aboutus .row .right p{
        color: rgba(108, 100, 106, 1);
        line-height: 1.5;
        font-size: 12px;
    }

    #aboutus .row .left h3{
        text-align: center;
    }

    #aboutus .row .left p{
        font-size: 12px;
    }
    
    #aboutus .row .left form{
        padding: 1.3rem;
        background-color: white;
        gap: 14px;
        color: rgba(108, 100, 106, 1);
    }
    
    #aboutus .row .left form p{
        font-weight: 700;
        text-align: center;
    }
    
    #aboutus .row .left form label{
        color: rgba(108, 100, 106, 1);
        margin-bottom: 6px;
        font-size: small;
    }
    
    #aboutus .row .left form input{
        outline: none;
        border: 1px solid rgba(186, 186, 186, 0.8);
        padding: 6px 16px 6px 6px;
        border-radius: 2px;
    }
    
    #aboutus .row .left form input::placeholder{
        color: rgba(186, 186, 186, 1)
    }
    
    #aboutus .row .left form .name{
        display: flex;
        flex-direction: row;
        gap: 4px;
    }
    
    #aboutus #industry{
        display: block;
        font-size: 14px;
        border: 1px solid rgba(186, 186, 186, 0.8);
        color: rgba(108, 100, 106, 0.5);
        margin-bottom: 8px;
        padding: 8px 20px 8px 8px;
        border-radius: 2px;
    }
    
    #aboutus #industry option {
        padding: 4px;
        font-size: 12px;
        background-color: #fff;
        color: rgba(108, 100, 106, 0.5);
        border-radius: 5px;
    }
    
    #industry:focus {
        color: black;
    }

    #aboutus .row .left form .agree{
        display: flex;
        flex-direction: row;
    }
    
    #aboutus .row .left form .checkbox{
        width: 36px;
        height: 36px;
        border-radius: 10px;
    }
    
    #aboutus .row .left form .button{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    #aboutus .row .left form .send{
        padding: 0.8rem 2rem;
        background-color: rgba(4, 190, 2, 1);
        color: white;
        outline: none;
        font-size: 16px;
        border: none;
        display: inline-block;
        font-weight: 700;
        transition: 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    #aboutus .row .left form .send:hover{
        background-color: rgb(5, 146, 3);
    }
    
    #advantage .col{
        padding: 2rem;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 8px;
    }

    #advantage img{
        max-width: 100%;
        height: 80px;
    }
    
    #advantage .col h1{
        font-size: 24px;
    }
    
    #advantage h2{
        margin: 0;
        font-size: 18px;
    }
    
    #advantage .advantage{
        gap: 8px;
        display: flex;
        flex-direction: column;
    }
    
    #advantage .advantage .col{
        padding: 1.2rem;
        background-color: white;
        max-width: 400px;
    }
    
    #feature .col{
        padding: 2rem;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 8px;
    }

    #feature img{
        max-width: 100%;
        height: 80px;
    }
    
    #feature .col h1{
        font-size: 24px;
    }
    
    #feature h2{
        margin: 0;
        font-size: 18px;
    }
    
    #feature .feature{
        gap: 8px;
        display: flex;
        flex-direction: column;
    }
    
    #feature .feature .col{
        padding: 2rem;
        max-width: 400px;
    }
    
    #value .col{
        position: relative;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        padding-bottom: 8rem;
    }
    
    #value .col h1{
        font-size: 24px;
        text-align: center;
    }
    
    #value .start{
        align-items: flex-start;
        justify-content: start;
        gap: 30px;
        display: flex;
        flex-direction: column;
        max-width: 80%;
    }
    
    #value .row{
        gap: 12px;
    }
    
    #value .row img{
        max-width: 100%;
        height: 14px;
    }
    
    #value .row p{
        margin: 0;
        margin-top: 4px;
        font-size: 12px;
        color: rgba(108, 100, 106, 1);
        font-weight: 500;
    }
    
    
    .referencetitle{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 50%;
        bottom: 20px;
        z-index: 1;
    }
    
    .referencetitle .reference{
        background-color: rgba(41, 54, 96, 1);
        padding: 1rem;
        font-size: 24px;
        color: white;
        text-align: center;
    }
    
    #reference .col{
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5rem;
        color: white;
        gap: 16px;
        z-index: -1;
    }
    
    #reference .col .brand{
        gap: 50px;
        display: flex;
        flex-direction: column;
    }
    
    #reference .col .brand img{
        max-width: 100%;
        height: 40px;
    }
    
    #reference .bottom .title{
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    
    #reference .bottom .title p{
        font-size: 12px;
    }
    
    #reference .col .explore{
        font-size: 24px;
    }
    
    #reference .col .content{
        gap: 12px;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }
    
    #reference .col .content .col{
        padding: 0.2rem;
        box-shadow: 0 0 15px rgba(43, 43, 43, 0.3);
        width: 300px;
        height: 200px;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    
    #reference .col .content img{
        max-width: 100%;
        height: 60px;
    }
    
    #reference .col .content h3{
        font-weight: 600;
    }

    /* ===================================thank you================================= */
    #thankyou .col{
        display: flex;
        padding: 5rem;
        justify-content: center;
        align-items: center;
        gap: 12px;
    }

    #thankyou h1{
        font-size: 24px;
        margin: 0;
    }

    #thankyou p{
        font-weight: 600;
        font-size: 14px;
    }

    #thankyou a{
        padding: 0.8rem 2rem;
        background-color: rgba(4, 190, 2, 1);
        color: white;
        outline: none;
        font-size: 16px;
        border: none;
        display: inline-block;
        font-weight: 500;
        transition: 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    #thankyou img{
        max-width: 100%;
        height: 120px;
    }

    /* ===================================footer================================= */
    #footer .upper{
        display: flex;
        flex-direction: row;
        padding: 1.2rem 5rem;
        background: linear-gradient(160deg, rgba(0, 0, 142, 1), rgba(4, 190, 2, 1));
        justify-content: center;
        align-items: center;
    }

    #footer .upper .content{
        font-family: 'Rubik';
        align-items: start;
        justify-content: center;    
        gap: 2.3rem;
        color: white;
    }

    #footer p{
        margin: 3px;
    }

    #footer .upper .image{
        align-items: center;
        justify-content: center;
    }

    #footer .bottom{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #000A85;
        color: white;
        padding: 1.5rem 1rem;
        font-family: 'Rubik';
        font-weight: 400;
        font-size: 12px;
        text-align: center;
    }

    #footer .footerImg{
        max-width: 100%;
        height: 100px;
        display: none;
    }
}

@media (max-width: 1024px) {
    h1{
        font-size: 24px;
    }

    p{
        font-size: 16px;
    }

    #aboutus .row .left form .name{
        display: flex;
        flex-direction: row;
        gap: 4px;
        align-items: start;
    }

    #advantage .advantage{
        gap: 8px;
        display: flex;
        flex-direction: column;
    }

    #feature .feature{
        gap: 8px;
        display: flex;
        flex-direction: column;
    }

    #reference .col .brand{
        gap: 50px;
        display: flex;
        flex-direction: column;
    }

    #reference .col .content{
        gap: 12px;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    #footer .bottom{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #000A85;
        color: white;
        padding: 1.5rem 1rem;
        font-family: 'Rubik';
        font-weight: 400;
        font-size: 12px;
        text-align: center;
    }
}

@media (max-width: 820px) {
    h1{
        font-size: 24px;
    }

    p{
        font-size: 16px;
    }

    #home .col{
        color: white;
        font-family: 'Rubik';
        padding: 12rem 2rem;
        background: linear-gradient(160deg, rgba(0, 0, 142, 0.6), rgba(4, 190, 2, 0.6));
    }
    
    #home .col h1{
        font-size: 24px;
        text-align: center;
    }

    #home .col p{
        font-size: 12px;
        line-height: 1.15;
    }

    #home .col .row{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    #home .freeTrial{
        margin-top: 5px;
        padding: 0.6rem;
        background-color: rgba(4, 190, 2, 1);
        color: white;
        transition: 0.2s;
        font-size: 12px;
    }
    
    #home .freeTrial:hover{
        background-color: rgba(1, 128, 0, 1);
    }
    
    #home .freeTrial1{
        margin-top: 5px;
        padding: 0.6rem;
        background-color: rgba(1, 128, 0, 1);
        color: white;
        transition: 0.2s;
        font-size: 12px;
    }

    #aboutus .row .left form .name{
        display: flex;
        flex-direction: row;
        gap: 4px;
    }

    #advantage .advantage{
        gap: 8px;
        display: flex;
        flex-direction: column;
    }

    #feature .feature{
        gap: 8px;
        display: flex;
        flex-direction: column;
    }

    #reference .col .brand{
        gap: 50px;
        display: flex;
        flex-direction: column;
    }

    #reference .col .content{
        gap: 12px;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    #footer .footerImg{
        max-width: 100%;
        height: 100px;
        display: none;
    }

    #footer .bottom{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #000A85;
        color: white;
        padding: 1.5rem 1rem;
        font-family: 'Rubik';
        font-weight: 400;
        font-size: 12px;
        text-align: center;
    }
}

@media (max-width: 380px) {
    #aboutus .row .left form{
        padding: 1rem;
        background-color: white;
        gap: 8px;
        color: rgba(108, 100, 106, 1);
    }
    #aboutus .row .left form label{
        color: rgba(108, 100, 106, 1);
        margin-bottom: 3px;
        font-size: smaller;
        font-size: 10px;
    }
    
    #aboutus .row .left form input{
        outline: none;
        border: 1px solid rgba(186, 186, 186, 0.8);
        padding: 4px 12px 4px 4px;
        border-radius: 2px;
        font-size: 10px;
    }
    #aboutus #industry{
        display: block;
        font-size: 14px;
        border: 1px solid rgba(186, 186, 186, 0.8);
        color: rgba(108, 100, 106, 0.5);
        margin-bottom: 8px;
        padding: 4px 12px 4px 4px;
        border-radius: 2px;
        font-size: 10px;
    }
    
    #aboutus #industry option {
        padding: 4px;
        font-size: 10px;
        background-color: #fff;
        color: rgba(108, 100, 106, 0.5);
        border-radius: 2px;
        font-size: 10px;
    }
    #aboutus .row .left form .send{
        padding: 0.5rem 1.2rem;
        background-color: rgba(4, 190, 2, 1);
        color: white;
        outline: none;
        font-size: 16px;
        border: none;
        display: inline-block;
        font-weight: 700;
        transition: 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        font-size: 10px;
    }

    #footer .bottom{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #000A85;
        color: white;
        padding: 1.5rem 1rem;
        font-family: 'Rubik';
        font-weight: 400;
        font-size: 12px;
        text-align: center;
    }
}
</style>

<body>
    @include('layout.navbar')

    @yield('body')
    
    @include('layout.footer')
</body>
</html>