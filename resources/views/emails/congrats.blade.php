@include('includes.header');
<body style="margin: 0; padding: 0;">
    <div style = "width: 100%; display: flex; flex-direction: row; background-color: #e20613">
        <img style="width: 12%; padding: 10px; margin: auto" src="{{ $message->embed(public_path('neolinelogo.png')) }}" alt="">
    </div>

    <div style="margin-left: 4px; width: 100%;">
        <div style = "width: 100%;">
            <h1 style="font-style: normal; font-size: 1.5rem; margin: auto; text-align: center; margin-top: 10px;">Congratulations! You've been accepted! 🥳</h1>
            <img style = "text-align: center; margin: auto; display: block; width: 12%; margin-top: 10px; border-radius: 9999px; border-width: 3px; border-style: solid; border-color: #e20613" src="{{ $message->embed(public_path('storage/' . $picture))}}" alt="">
            <h1 style="font-style: normal; font-size: 1.5rem; margin: auto; text-align: center; margin-top: 10px;">Welcome to the team, {{ $firstName }}!</h1>
            <p style="margin-top: 12px;">Today marks the start of your adventure, {{ $firstName }}! You've been accepted in Neoline Studios with the position of {{ $position }}, and we hope to see you soon in our company!</p>
            <p style="margin-top: 12px;">Just to let you know, you will have to login to our company to see your daily tasks here at: <a href="http://127.0.0.1:8000/login">Neoline Studios Login</a>, and here's the information to login below:</p>
            <ul style = "margin-top: 12px;">
                <li><b>E-mail Address:</b> {{ $email }}</li>
                <li><b>Password:</b> {{ $password }}</li>
            </ul>
            <p style="text-align: center; margin: auto; margin-top: 12px;">Make sure to not forget your password!</p>
        </div>
    </div>
</body>
