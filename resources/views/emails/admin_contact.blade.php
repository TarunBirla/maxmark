<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Inquiry / Quote - MaxMark Builders</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .header {
            background-color: #0f172a;
            color: #ffffff;
            padding: 24px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .content {
            padding: 30px;
        }
        .field-group {
            margin-bottom: 18px;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 12px;
        }
        .label {
            font-size: 12px;
            text-transform: uppercase;
            color: #64748b;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .value {
            font-size: 15px;
            color: #1e293b;
        }
        .highlight-box {
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .message-box {
            background: #f8fafc;
            border-left: 4px solid #0f172a;
            padding: 15px;
            border-radius: 4px;
            white-space: pre-wrap;
            font-size: 15px;
            color: #334155;
        }
        .footer {
            background: #f1f5f9;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('logo.png') }}" alt="MaxMark Builders" style="height: 44px; width: auto; display: block; margin: 0 auto 10px;">
            <h1>MaxMark Builders</h1>
            <p style="margin: 5px 0 0 0; font-size: 13px; color: #94a3b8;">
                {{ isset($data['service']) ? 'New Instant Quote Request' : 'New Contact Inquiry Received' }}
            </p>
        </div>
        <div class="content">

            @if(isset($data['service']))
            <div class="highlight-box">
                <div class="label" style="color: #92400e;">Requested Service & Estimate</div>
                <div class="value" style="font-weight: bold; font-size: 17px; color: #78350f;">
                    {{ $data['service'] }} — {{ $data['size'] ?? '' }}
                </div>
                <div style="font-size: 16px; color: #b45309; margin-top: 4px; font-weight: 600;">
                    Estimate: {{ $data['estimate'] ?? 'N/A' }}
                </div>
                @if(isset($data['time']))
                <div style="font-size: 13px; color: #92400e; margin-top: 4px;">
                    Timeline: {{ $data['time'] }}
                </div>
                @endif
            </div>
            @endif

            <div class="field-group">
                <div class="label">First / Full Name</div>
                <div class="value">{{ $data['name'] ?? $data['first_name'] }}</div>
            </div>
            
            <div class="field-group">
                <div class="label">Email Address</div>
                <div class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
            </div>

            <div class="field-group">
                <div class="label">Phone Number</div>
                <div class="value"><a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></div>
            </div>

            @if(isset($data['postcode']))
            <div class="field-group">
                <div class="label">Postcode</div>
                <div class="value">{{ $data['postcode'] ?: 'Not provided' }}</div>
            </div>
            @endif

            @if(isset($data['message']))
            <div class="field-group" style="border-bottom: none;">
                <div class="label">Message</div>
                <div class="message-box">{{ $data['message'] }}</div>
            </div>
            @endif

        </div>
        <div class="footer">
            MaxMark Builders©. All rights reserved. 2026
        </div>
    </div>
</body>
</html>
