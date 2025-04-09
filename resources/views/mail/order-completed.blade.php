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
        <!-- Header with logo -->
        <div
            style="
                background-color: #1e40af;
                padding: 20px 0;
                text-align: center;
            "
        >
            <h1 style="color: #ffffff; margin: 0; font-size: 24px">
                Order Ready for Payment
            </h1>
        </div>

        <!-- Main content -->
        <div style="padding: 30px 40px">
            <h2 style="color: #1e40af; font-size: 22px; margin-bottom: 15px">
                Hello {{ $user ? $user->name : $order->name }},
            </h2>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                Your order has been
                <strong style="color: #047857">completed</strong> and is ready
                for pickup. To access your items, please complete the payment
                first.
            </p>

            <!-- Order details -->
            <div
                style="
                    background-color: #f0f9ff;
                    border-radius: 6px;
                    padding: 20px;
                    margin-bottom: 25px;
                    border-left: 4px solid #3b82f6;
                "
            >
                <h3
                    style="
                        color: #1e40af;
                        font-size: 18px;
                        margin-top: 0;
                        margin-bottom: 15px;
                    "
                >
                    Order Details
                </h3>
                <p style="font-size: 15px; color: #4b5563; margin-bottom: 8px">
                    <strong>Order ID:</strong> #{{ $order->id }}
                </p>
                <p style="font-size: 15px; color: #4b5563; margin-bottom: 8px">
                    <strong>Date & Time:</strong>
                    {{ $order->created_at->format('d M Y, H:i') }}
                </p>
                <p style="font-size: 15px; color: #4b5563; margin-bottom: 8px">
                    <strong>Locker:</strong>
                    {{ $order->locker->name ?? 'Locker' }}
                </p>
                <p style="font-size: 15px; color: #4b5563; margin-bottom: 0">
                    <strong>Amount:</strong>
                    £{{ number_format($order->price, 2) }}
                </p>
            </div>

            <!-- Important notice -->
            <div
                style="
                    background-color: #fff0f1;
                    border-radius: 6px;
                    padding: 20px;
                    margin-bottom: 25px;
                    border-left: 4px solid #ef4444;
                "
            >
                <h3
                    style="
                        color: #b91c1c;
                        font-size: 18px;
                        margin-top: 0;
                        margin-bottom: 10px;
                    "
                >
                    Important Information
                </h3>
                <ul
                    style="color: #4b5563; margin-bottom: 0; padding-left: 20px"
                >
                    <li style="margin-bottom: 8px">
                        Your pickup code will be provided immediately after
                        payment
                    </li>
                    <li style="margin-bottom: 8px">
                        The pickup code will be valid for
                        <strong>1 Hour</strong> only
                    </li>
                    <li>
                        Please ensure you're ready to collect your items before
                        completing payment
                    </li>
                </ul>
            </div>

            <!-- Payment button -->
            <div style="text-align: center; margin: 30px 0">
                <a
                    href="{{ $checkoutUrl }}"
                    style="
                        background-color: #2563eb;
                        color: #ffffff;
                        padding: 14px 28px;
                        border-radius: 6px;
                        text-decoration: none;
                        font-weight: bold;
                        display: inline-block;
                        font-size: 16px;
                    "
                >
                    Complete Payment
                </a>
            </div>

            <p style="font-size: 16px; color: #4b5563; margin-bottom: 20px">
                After completing your payment, you'll immediately receive your
                pickup code which will be valid for 1 Hour. Please make sure
                you're ready to collect your items before proceeding with
                payment.
            </p>

            <div
                style="
                    border-top: 1px solid #e5e7eb;
                    margin-top: 30px;
                    padding-top: 20px;
                "
            >
                <p style="font-size: 14px; color: #4b5563; margin-bottom: 8px">
                    If you have any questions or need assistance, please don't
                    hesitate to contact our support team.
                </p>
                <p style="font-size: 14px; color: #4b5563; margin-bottom: 0">
                    Thank you for using our services!
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div
            style="
                background-color: #f9fafb;
                padding: 20px 40px;
                text-align: center;
                font-size: 12px;
                color: #9ca3af;
                border-top: 1px solid #e5e7eb;
            "
        >
            <p style="margin-bottom: 10px">
                © {{ date("Y") }} {{ config("app.name") }}. All rights reserved.
            </p>
            <p style="margin: 0">This email was sent to {{ $order->email }}</p>
        </div>
    </div>
</div>
