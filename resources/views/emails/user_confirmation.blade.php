<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You - MaxMark Builders</title>
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
            padding: 28px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .header p {
            margin: 8px 0 0 0;
            color: #cbd5e1;
            font-size: 14px;
        }
        .content {
            padding: 30px;
            line-height: 1.6;
            color: #334155;
        }
        .quote-box {
            background: #fffbeb;
            border: 1px solid #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 18px;
            border-radius: 6px;
            margin: 20px 0;
        }
        .contact-card {
            background: #f8fafc;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #e2e8f0;
        }
        .contact-card h4 {
            margin: 0 0 10px 0;
            color: #0f172a;
        }
        .contact-item {
            margin-bottom: 6px;
            font-size: 14px;
        }
        .footer {
            background: #f1f5f9;
            padding: 18px;
            text-align: center;
            font-size: 12px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>MaxMark Builders</h1>
            <p>Thank you for reaching out to us!</p>
        </div>
        <div class="content">
            <p>Dear <strong>{{ $data['name'] ?? $data['first_name'] }}</strong>,</p>

            @if(isset($data['service']))
            <p>We have received your request for a quote estimate.</p>
            <div class="quote-box">
                <h4 style="margin: 0 0 6px 0; color: #78350f;">Quote Summary:</h4>
                <div><strong>Service:</strong> {{ $data['service'] }} ({{ $data['size'] ?? '' }})</div>
                <div><strong>Estimated Range:</strong> {{ $data['estimate'] ?? 'N/A' }}</div>
                @if(isset($data['postcode']) && $data['postcode'])
                <div><strong>Postcode:</strong> {{ $data['postcode'] }}</div>
                @endif
            </div>
            <p>Our team at MaxMark Builders is reviewing your project details and will call you within one working day to arrange your free site visit.</p>
            @else
            <p>We have received your message regarding <em>"{{ $data['subject'] ?? 'your inquiry' }}"</em>. Our team at MaxMark Builders is reviewing your request and will get back to you as soon as possible.</p>
            @endif

            <div class="contact-card">
                <h4>MaxMark Builders Contact Information</h4>
                <div class="contact-item"><strong>Email:</strong> maxmarkbuilders@gmail.com</div>
                <div class="contact-item"><strong>Phone:</strong> +44 7397 087600</div>
            </div>

            <p>If you need urgent assistance, please feel free to call us directly at <strong>+44 7397 087600</strong>.</p>

            <p>Best regards,<br>
            <strong>MaxMark Builders Team</strong></p>
        </div>
        <div class="footer">
            MaxMark Builders©. All rights reserved. 2026
        </div>
    </div>
</body>
</html>
