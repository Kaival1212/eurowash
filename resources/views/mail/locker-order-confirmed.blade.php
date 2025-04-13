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
                Hello {{ $order->name ?? $user->name ?? 'Customer' }},
            </h2>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                Your locker order at <strong>{{ $store->name }}</strong> has
                been <strong style="color: #16a34a">confirmed</strong>. You're
                now ready to drop off your laundry!
            </p>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                <strong>Locker Number:</strong>
                {{ $locker->locker_number



                }}<br />
                <strong>Before Code:</strong> {{ $order->before_code }}<br />
                <strong>Booking ID:</strong> #{{ $order->id }}<br />
                <strong>Date & Time:</strong>
                {{ $order->created_at->format('d M Y, H:i') }}<br />
                <strong>Store:</strong> {{ $store->name }}<br />
            </p>

            @if ($order->notes)
            <p style="font-size: 15px; color: #6b7280; margin-bottom: 20px">
                <strong>Note:</strong> {{ $order->notes }}
            </p>
            @endif

            <p
                style="
                    background-color: #fef9c3;
                    color: #92400e;
                    font-size: 15px;
                    padding: 12px 16px;
                    border-left: 4px solid #facc15;
                    border-radius: 6px;
                    margin-bottom: 30px;
                "
            >
                ⚠️ Please make sure to drop off your laundry within
                <strong>12 hour</strong> of receiving this email, or the locker
                may be released for others.
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
