<div
    style="
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        background-color: #f4f4f7;
        padding: 40px;
    "
>
    <div
        style="
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        "
    >
        <div style="padding: 30px 40px">
            <h2 style="color: #16a34a; font-size: 28px; margin-bottom: 10px">
                Payment Successful 💸
            </h2>
            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                Hi {{ $user }},
            </p>
            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                Thank you for using <strong>Eurowash</strong>. We've received
                your payment for your locker
                <strong>#{{ $locker->locker_number }}</strong
                >.
            </p>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 30px">
                Your locker is now ready to access. Please use the code below to
                unlock it:
            </p>

            <div
                style="
                    background-color: #fef3c7;
                    color: #92400e;
                    font-size: 24px;
                    font-weight: bold;
                    text-align: center;
                    padding: 15px;
                    border-radius: 6px;
                    margin-bottom: 30px;
                    letter-spacing: 2px;
                "
            >
                {{ $order->after_code }}
            </div>

            <div style="text-align: center; margin-bottom: 40px">
                <a
                    href="{{ route('home') }}"
                    style="
                        background-color: #2563eb;
                        color: #ffffff;
                        padding: 12px 24px;
                        border-radius: 6px;
                        text-decoration: none;
                        font-weight: bold;
                        display: inline-block;
                    "
                >
                    Go to Website
                </a>
            </div>

            <p style="font-size: 14px; color: #9ca3af">
                Need help or have questions? Just reply to this email.
            </p>
        </div>

        <div
            style="
                background-color: #f9fafb;
                padding: 20px 40px;
                text-align: center;
                font-size: 12px;
                color: #9ca3af;
            "
        >
            &copy; {{ date("Y") }} Eurowash Centre. All rights reserved.
        </div>
    </div>
</div>
