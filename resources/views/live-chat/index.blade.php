<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Live Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaf4fc;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .chat-container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .chat-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }
        .chat-messages {
            height: 400px;
            overflow-y: auto;
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
        }
        .message {
            margin-bottom: 10px;
        }
        .message.sent {
            text-align: right;
        }
        .message.sent .bubble {
            background-color: #007bff;
            color: white;
            display: inline-block;
            padding: 10px;
            border-radius: 15px;
        }
        .message.received .bubble {
            background-color: #eaf4fc;
            color: #333;
            display: inline-block;
            padding: 10px;
            border-radius: 15px;
        }
        .chat-footer {
            padding: 15px;
            border-top: 1px solid #ddd;
            background-color: #fff;
        }
        .btn-send {
            background-color: #007bff;
            color: white;
        }
        .btn-send:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('chat.dashboard') }}">Konsultasi Live Chat</a>
            <div class="ms-auto">
                <button class="btn btn-light" onclick="location.href='{{ route('chat.dashboard') }}'">Back</button>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="chat-container">
            <div class="chat-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Live Chat</h5>
                <span class="badge bg-light text-dark">Status: Online</span>
            </div>
            <div class="chat-messages" id="chatMessages">
                @foreach ($messages as $message)
                    <div class="message {{ $message['type'] }}">
                        <div class="bubble">{{ $message['content'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="chat-footer d-flex">
                <input type="text" id="messageInput" class="form-control me-2" placeholder="Ketik pesan...">
                <button class="btn btn-send" onclick="sendMessage()">Kirim</button>
            </div>
        </div>
    </div>

    <script>
        function sendMessage() {
            const input = document.getElementById('messageInput');
            const messageText = input.value.trim();

            if (messageText) {
                fetch("{{ route('chat.send') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ message: messageText })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.type && data.content) {
                        const chatMessages = document.getElementById('chatMessages');
                        const messageDiv = document.createElement('div');
                        messageDiv.classList.add('message', data.type);
                        messageDiv.innerHTML = `<div class="bubble">${data.content}</div>`;
                        chatMessages.appendChild(messageDiv);
                        input.value = '';
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    }
                });
            }
        }
    </script>
</body>
</html>
