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
            <h2 style="color: #b91c1c; font-size: 28px; margin-bottom: 10px">
                Oops — Your Payment Didn't Go Through
            </h2>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                It looks like there was a problem processing your payment for
                your recent Eurowash order.
            </p>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 30px">
                No worries — you can try again by clicking the button below.
            </p>

            <div style="text-align: center; margin-bottom: 40px">
                <a
                    href="{{ $order->payment_link }}"
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
                    Retry Payment
                </a>
            </div>

            <p style="font-size: 14px; color: #9ca3af">
                If the issue persists or you need any help, just reply to this
                email — we’re here for you.
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
