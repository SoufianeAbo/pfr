@include('includes.header');
<body style="margin: 0; padding: 0;">
    <div style = "width: 100%; display: flex; flex-direction: row; background-color: #e20613">
        <img style="width: 12%; padding: 10px; margin: auto" src="{{ $message->embed(public_path('neolinelogo.png')) }}" alt="">
    </div>

    <div style="margin-left: 4px; width: 100%;">
        <div style = "width: 100%;">
            <h1 style="font-style: normal; font-size: 1.5rem; margin: auto; text-align: center; margin-top: 10px;">We're extremely sorry... 😔</h1>
            <img style = "text-align: center; margin: auto; display: block; width: 12%; margin-top: 10px; border-radius: 9999px; border-width: 3px; border-style: solid; border-color: #e20613" src="{{ $message->embed(public_path('storage/' . $picture))}}" alt="">
            <h1 style="font-style: normal; font-size: 1.5rem; margin: auto; text-align: center; margin-top: 10px;">You have been rejected, {{ $firstName }}!</h1>
            <p style="margin-top: 12px;">We're extremely sorry to tell you, {{ $firstName }}, that your application for the position of {{ $position }}, has been denied.</p>
            <p style="margin-top: 12px;">It's not too late, though! You can still re-apply once you have gained more experience with us!</p>

            <p style="text-align: center; margin: auto; margin-top: 12px;">Thank you for your support!</p>
        </div>
    </div>
</body>
