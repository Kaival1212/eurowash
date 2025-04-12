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
                New Locker Order Received
            </h2>

            <div
                style="
                    background-color: #e0f2fe;
                    border-left: 4px solid #0ea5e9;
                    border-radius: 6px;
                    padding: 16px;
                    margin-bottom: 24px;
                "
            >
                <h3
                    style="
                        color: #0c4a6e;
                        font-size: 18px;
                        margin-top: 0;
                        margin-bottom: 10px;
                    "
                >
                    Order Details
                </h3>
                <p style="font-size: 16px; color: #4b5563; margin-bottom: 5px">
                    <strong>Customer:</strong>
                    {{ $order->name ?? $user->name ?? 'Customer' }}<br />
                    <strong>Booking ID:</strong> #{{ $order->id }}<br />
                    <strong>Locker Number:</strong>
                    {{ $locker->locker_number


                    }}<br />
                    <strong>Date & Time:</strong>
                    {{ $order->created_at->format('d M Y, H:i') }}<br />
                    <strong>Before Code:</strong>
                    {{ $order->before_code


                    }}<br />
                </p>
            </div>

            @if ($order->notes)
            <div
                style="
                    background-color: #fef2f2;
                    border-left: 4px solid #ef4444;
                    border-radius: 6px;
                    padding: 16px;
                    margin-bottom: 24px;
                "
            >
                <h3
                    style="
                        color: #991b1b;
                        font-size: 18px;
                        margin-top: 0;
                        margin-bottom: 10px;
                    "
                >
                    Customer Notes
                </h3>
                <p style="font-size: 15px; color: #4b5563; margin-bottom: 0">
                    {{ $order->notes }}
                </p>
            </div>
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
                ⚠️ The customer has been instructed to drop off their laundry
                within <strong>1 hour</strong> of receiving their confirmation
                email.
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
            reserved.<br />
            This is an automated notification email for staff.
        </div>
    </div>
</div>
