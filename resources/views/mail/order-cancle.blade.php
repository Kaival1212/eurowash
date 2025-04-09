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
            <h2 style="color: #b91c1c; font-size: 26px; margin-bottom: 10px">
                We're Sorry — Your Order Was Not Accepted
            </h2>
            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                Unfortunately, we were unable to accept your recent order at
                <strong>Eurowash</strong>. This could be due to locker
                availability or other internal factors.
            </p>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 30px">
                Please feel free to try again later or contact our support team
                if you believe this was a mistake or need further assistance.
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
                    Return to Website
                </a>
            </div>

            <p style="font-size: 14px; color: #9ca3af">
                If you have any questions or need help, feel free to reply to
                this email or contact our team directly.
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
