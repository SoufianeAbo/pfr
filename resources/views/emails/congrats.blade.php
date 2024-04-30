@include('includes.header');
<body style="margin: 0; padding: 0;">
    <div style = "width: 100%; display: flex; flex-direction: row; background-color: #e20613">
        <img style="width: 12%; padding: 10px; margin: auto" src="{{ $message->embed(public_path('neolinelogo.png')) }}" alt="">
    </div>

    <div style="margin-left: 4px; width: 100%;">
        <div style = "width: 100%; margin: auto;">
            <h1 style="font-size: 1.5rem; margin: auto; text-align: center; margin-top: 10px;">Congratulations! You've been accepted! 🥳</h1>
            <img src="{{ $message->embed(public_path('storage/' . $picture))}}" alt="">
        </div>
        <p style="margin-top: 1rem;">It comes with great honor to accept you as one of us in Neoline Studios!</p>
    </div>
</body>
