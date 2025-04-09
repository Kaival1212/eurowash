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
            <h2 style="color: #1e40af; font-size: 26px; margin-bottom: 10px">
                Hello {{ $name }},
            </h2>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                We have received your booking request for
                <strong>Locker: {{ $locker->locker_number }}</strong
                >. Your booking is currently <strong>pending</strong>.
            </p>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 10px">
                <strong>Booking ID:</strong> {{ $locker->id }}<br />
                <strong>Date & Time:</strong>
                {{ $order->created_at->format('d M Y, H:i') }}
            </p>

            <div style="text-align: center; margin: 30px 0">
                <a
                    href="{{ route('user.order' , ['orderID' => $order->id]) }}"
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
                    View Booking Details
                </a>
            </div>

            <p style="font-size: 14px; color: #9ca3af">
                If you have any questions, feel free to reply to this email.
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
            &copy; {{ date("Y") }} {{ config("app.name") }}. All rights
            reserved.
        </div>
    </div>
</div>
