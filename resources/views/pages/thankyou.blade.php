@extends('layout.master')

@section('content')

<style>
    .thankyou-wrapper {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #faf9f6 0%, #eee9e0 100%);
        padding: 50px 20px;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }

    .thankyou-box {
        background: #ffffff;
        padding: 40px 35px;
        border-radius: 15px;
        max-width: 600px;
        width: 100%;
        box-shadow: 0px 8px 25px rgba(0,0,0,0.08);
        border: 1px solid #e4dfd7;
    }

    .thankyou-title {
        font-size: 32px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
    }

    .thankyou-msg {
        font-size: 18px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .thankyou-icon {
        font-size: 60px;
        color: #7aa93c;
        margin-bottom: 15px;
    }

    .back-btn {
        background: #7aa93c;
        color: #fff;
        padding: 12px 28px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        transition: 0.3s ease;
    }
    .back-btn:hover {
        background: #6f9b36;
    }
</style>

<div class="thankyou-wrapper">
    <div class="thankyou-box">

        <div class="thankyou-icon">✔</div>

        <h2 class="thankyou-title">Merci Beaucoup!</h2>

        <p class="thankyou-msg">
            Votre formulaire a bien été envoyé.<br>
            Merci pour votre réponse, nous vous contacterons très bientôt.
        </p>

        <a href="{{ url('/') }}" class="back-btn">Retour à l’accueil</a>

    </div>
</div>

@endsection
