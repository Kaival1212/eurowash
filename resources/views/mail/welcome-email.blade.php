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
            <h2 style="color: #1e40af; font-size: 28px; margin-bottom: 10px">
                Welcome, {{ $user->name }} 👋
            </h2>
            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                Thank you for joining <strong>Eurowash</strong>! Your
                registration was successful and we're thrilled to have you on
                board.
            </p>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 30px">
                You can now book lockers, manage your laundry services, and
                track everything with ease.
            </p>

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
                If you have any questions or need help, feel free to reply to
                this email.
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
